<?php
    session_start();
    if($_SESSION['csrf'] == $_GET['csrf']) {
        session_destroy();
        Header("Location: ./");
    } else {
        echo '[GDCFS Framework][ERROR][Msg: Phát hiện tấn công CSRF]';
    }