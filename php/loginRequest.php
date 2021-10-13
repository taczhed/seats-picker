<?php
    require_once 'db.php';

    $sql = "SELECT * FROM users WHERE login='$_POST[login]' and password='$_POST[password]' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        //session
        session_start();

        $_SESSION['user'] = $_POST['login'];

        $arr = array('result' => 'success');
        echo json_encode($arr);
    } else {
        $arr = array('result' => 'error');
        echo json_encode($arr);
    }

    mysqli_close($conn);

?>