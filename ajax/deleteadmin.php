<?php


    require_once "../server/admin.php";
    require_once "../server/csdl.connect.php";
    $csdl = new csdl;
    $conn = $csdl->ConnectCSDL();
  
    header('Content-Type: application/json');
    if($_SESSION['level'] < 4){
        echo json_encode(array('code' => 400, 'msg'=> 'Bạn không có quyền thực hiện chức năng này'));
        exit;
    } 
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo json_encode(array('code' => 400, 'msg'=> 'Lỗi cú pháp truy vấn'));
   } 
   
    $id = $_POST['id'];
    
    $result = $conn->query("DELETE FROM `users` WHERE `id`='$id'");
        if($result){
            echo json_encode(array('code' => 200, 'msg'=> 'Thành công'));
        } else {
            echo json_encode(array('code' => 500, 'msg'=> 'Lỗi truy vấn'));
        }
   
    

