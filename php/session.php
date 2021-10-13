<?php
    session_start();

    if(isset($_SESSION['user'])){
        $arr = array('user' => $_SESSION['user'], 'status' => true);
        echo json_encode($arr);
    } else {
        $arr = array('user' => null, 'status' => false);
        echo json_encode($arr);
    }
?>