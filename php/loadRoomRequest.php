<?php
    session_start();
    require_once 'db.php';
    $sql = "SELECT seats FROM rooms WHERE id = '$_POST[id]'";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_row();
    echo json_encode(array('seats' => $row[0], 'userId' => $_SESSION['id']));
?>