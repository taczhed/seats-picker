<?php
    require_once 'db.php';

    $sql = "SELECT * FROM users WHERE login='$_POST[login]' or tel='$_POST[tel]' ";
    $matching_rows = mysqli_query($conn, $sql);

    if (mysqli_num_rows($matching_rows) > 0) {
        $arr = array('result' => 'Błąd! Istnieje osoba o podanym loginie lub numerze telefonu!');
        echo json_encode($arr);
    } else {
        $sql = "INSERT INTO users (id, tel, login, password) VALUES (NULL, '$_POST[tel]', '$_POST[login]', '$_POST[password]')";
        $result = mysqli_query($conn, $sql);
        $arr = array('result' => 'Rejestracja przebiegła pomyślnie!');
        echo json_encode($arr);
    }

    mysqli_close($conn);

?>