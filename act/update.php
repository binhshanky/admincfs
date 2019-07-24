<?php


    require_once "../server/admin.php";
    require_once "../server/csdl.connect.php";
    $csdl = new csdl;
    $conn = $csdl->ConnectCSDL();
  
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        $_SESSION['code'] = 400;
        $_SESSION['msg'] = 'Bạn bị từ chối truy vấn';
        Header("Location: ../chinh-sua-hashtag");
        exit;
   } 
   
    $id = $_SESSION['id'];
    $name = addslashes($_POST['name']);
    $sign = addslashes($_POST['sign']);
    if($id == "" | $name == "" | $sign == ""){
        $_SESSION['code'] = 400;
        $_SESSION['msg'] = 'Vui lòng điền đầy đủ thông tin';
       
        Header("Location: ../chinh-sua-hashtag");
        exit;
    }
    $result = $conn->query("UPDATE `users` SET `name`='$name',`sign`='$sign' WHERE `id`='$id'");
        if($result){
            $_SESSION['code'] = 200;
            $_SESSION['msg'] = 'Cập nhật thành công';
            Header("Location: ../chinh-sua-hashtag");
        } else {
            $_SESSION['code'] = 500;
            $_SESSION['msg'] = 'Có lỗi khi truy vấn cập nhật';
            Header("Location: ../chinh-sua-hashtag");
        }
   
    

