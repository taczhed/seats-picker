<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Seats picker - logowanie</title>
    <link href="css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/fontawesome/brands.js"></script>
    <script defer src="js/fontawesome/solid.js"></script>
    <script defer src="js/fontawesome/fontawesome.js"></script>
    <script defer src="js/app.js" type="module"></script>

</head>
<body>

<div id="login-info"> Hi <span>
   <?php
       if(isset($_SESSION['user'])) echo $_SESSION['user'];
   ?></span>#<?php if(isset($_SESSION['id'])) echo $_SESSION['id'];?>!
</div>

<main class="columns">
    <div class="column is-half-desktop is-8-tablet is-offset-3-desktop is-offset-2-tablet block mt-4 p-6">
        <p class="is-size-4 has-text-centered mb-2">
        <?php
            require_once './php/db.php';
            $sql = "SELECT movie FROM rooms WHERE id = '$_GET[id]'";
            $result = mysqli_query($conn, $sql);
            $row = $result->fetch_row();
            echo $row[0];
        ?>
        </p>
        <figure class="image">
            <img id="bgc" alt="bg" src="img/bg.jpg">
        </figure>
        <div id="app" class="box"></div>
    </div>
</main>

</body>
</html>