<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'seats-picker-db';

    $conn = mysqli_connect($server, $user, $pass, $db) or die('db connection filed!');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>