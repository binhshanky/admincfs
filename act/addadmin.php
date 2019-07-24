<?php

    require_once "../server/admin.php";
    require_once "../server/csdl.connect.php";
    $csdl = new csdl;
    $conn = $csdl->ConnectCSDL();
    if($_SESSION['level'] < 4){
        $_SESSION['code'] = 400;
        $_SESSION['msg'] = 'Bạn không đủ quyền hạn để thực hiện chức năng này';
        Header("Location: ../them-quan-ly");
        exit;
    } 
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        $_SESSION['code'] = 400;
        $_SESSION['msg'] = 'Bạn bị từ chối truy vấn';
        Header("Location: ../them-quan-ly");
        exit;
   } 
   
    $id = addslashes($_POST['id']);
    $name = addslashes($_POST['name']);
    $sign = addslashes($_POST['sign']);
    $level = addslashes($_POST['level']);
    $type = $_POST['type'];
    if($id == "" | $name == "" | $sign == "" | $level == "" ){
        $_SESSION['code'] = 400;
        $_SESSION['msg'] = 'Vui lòng điền đầy đủ thông tin';
       
        Header("Location: ../them-quan-ly");
        exit;
    }
    if($type == "" | $type == "new"){
        $result = $conn->query("INSERT INTO `users`(`id`, `name`, `sign`, `level`) VALUES ('$id','$name','$sign', '$level')");
        if($result){
            $_SESSION['code'] = 200;
            $_SESSION['msg'] = 'Đã thêm thành công';
            Header("Location: ../them-quan-ly");
        } else {
            $_SESSION['code'] = 500;
            $_SESSION['msg'] = 'Có lỗi khi truy vấn';
            Header("Location: ../them-quan-ly");
        }
    } else if($type == "update"){
        $result = $conn->query("UPDATE `users` SET `name`='$name',`sign`='$sign',`level`='$level' WHERE `id`='$id'");
        if($result){
            $_SESSION['code'] = 200;
            $_SESSION['msg'] = 'Cập nhật thành công';
            Header("Location: ../them-quan-ly");
        } else {
            $_SESSION['code'] = 500;
            $_SESSION['msg'] = 'Có lỗi khi truy vấn cập nhật';
            Header("Location: ../them-quan-ly");
        }
    }
   
    

