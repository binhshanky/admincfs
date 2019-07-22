<?php
if(!session_id()){
    session_start();
}
if($_SESSION['id'] == ""){
    header("Location: ./dang-nhap");
    exit;
}