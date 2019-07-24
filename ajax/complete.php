<?
    session_start();
	$cfsdd = base64_decode($_POST['cfsdd']);
    $num = count(explode(",",$cfsdd));
    $sign = strip_tags($_POST['sign']);
    if($num == 0){
        $resp = array('code'=>500,'msg'=>'Lỗi dữ liệu');
		echo json_encode($resp);
    }
    header('Content-Type: application/json');
	require_once "../server/admin.php";
	require_once "../server/csdl.connect.php";
	$csdl = new csdl;
    $conn = $csdl->ConnectCSDL();
    $csdl->getConfig();
    $result = $conn->query("UPDATE `cfs` SET `pby`='$sign' WHERE `id` IN ($cfsdd)");
	$result = $conn->query("INSERT INTO `cfs_done`* SELECT * FROM `cfs` WHERE `id` IN ($cfsdd)");
	// INSERT INTO `cfs_done`(`id`, `date`, `type`, `cfs`, `ip`, `pby`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
	$result = $conn->query("INSERT INTO `cfs_done` (`id`, `date`, `type`, `cfs`, `ip`, `pby`) SELECT * FROM `cfs` WHERE `id` IN ($cfsdd)");

	$result = $conn->query("DELETE FROM `cfs` WHERE `id` IN ($cfsdd)");
	$fn = $number+$num;
    $result = $conn->query("UPDATE `config` SET `value`='$fn' WHERE `name`='number'");
    
	if($result){
		$resp = array('code'=>200,'msg'=>'Thành công');
		echo json_encode($resp);
	}