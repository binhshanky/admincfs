<?
    require_once "server/fb.php";

    try {
        $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Đã xãy ra lỗi: ' . $e->getMessage();
        exit;
    }

    if (! isset($accessToken)) {
    if ($helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo "Error: " . $helper->getError() . "\n";
        echo "Error Code: " . $helper->getErrorCode() . "\n";
        echo "Error Reason: " . $helper->getErrorReason() . "\n";
        echo "Error Description: " . $helper->getErrorDescription() . "\n";
    } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request';
    }
    exit;
    }
    $oAuth2Client = $fb->getOAuth2Client();
    $tokenMetadata = $oAuth2Client->debugToken($accessToken);

    $tokenMetadata->validateAppId('2012433569051977'); 
    $tokenMetadata->validateExpiration();

    if (! $accessToken->isLongLived()) {
    try {
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
        exit;
    }
    }

    $_SESSION['fb_access_token'] = (string) $accessToken;
    try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=id,name', $accessToken);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
    }

    $user = $response->getGraphUser();
    $iduser = $user['id'];
    require_once "./server/csdl.connect.php";
    $csdl = new csdl;
    $conn = $csdl->ConnectCSDL();
   
    $result = $conn->query("SELECT * FROM `users` WHERE `id`='$iduser'");
    
    if($result->num_rows > 0){
        $_SESSION['name'] = $user['name'];
        $_SESSION['id'] = $user['id'];
        try {
        $response = $fb->get(
            '/me/picture?size=square&redirect=0',
            $accessToken
        );
        } catch(FacebookExceptionsFacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
        } catch(FacebookExceptionsFacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
        }
        $graphNode = $response->getGraphNode();
        $_SESSION['avatar'] = $graphNode['url'];
        $info = $result->fetch_assoc();
        $_SESSION['sign'] = $info['sign'];
        $_SESSION['level'] = $info['level'];
        $_SESSIOM['ddtb'] = 0;
        Header("Location: ./");
        $conn->close();
        unset($result);

    } else {
        echo '[GDCFS Framework][ERROR][Action:Login][Msg:Bạn không có quyền truy cập trang này. Vui lòng liên hệ quản trị hệ thống để biết thêm chi tiết.][Error code: '.$user['id'].']';
        session_destroy(); 
    }
