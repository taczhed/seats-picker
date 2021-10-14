<?php
    require_once 'db.php';

    $sql = "SELECT * FROM rooms";
    $result = mysqli_query($conn, $sql);
    $arr = array();

    while($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    };

    echo json_encode($arr);
    mysqli_close($conn);
?>
