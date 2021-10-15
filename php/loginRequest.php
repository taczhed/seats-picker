<?php
    require_once 'db.php';

    $sql = "SELECT id, password FROM users WHERE login='$_POST[login]' ";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_row();

    if (mysqli_num_rows($result) > 0) {

       if (password_verify($_POST['password'], $row[1])) {
          session_start();

          $_SESSION['user'] = $_POST['login'];
          $_SESSION['id'] = $row[0];

          $arr = array('result' => 'success');
          echo json_encode($arr);
       } else {
          $arr = array('result' => 'error');
          echo json_encode($arr);
       }
    } else {
        $arr = array('result' => 'error');
        echo json_encode($arr);
    }

    mysqli_close($conn);

?>