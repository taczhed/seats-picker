<?php
    require_once 'db.php';
    $sql = "UPDATE rooms SET seats = '$_POST[seats]' WHERE id = '$_POST[id]'";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
?>