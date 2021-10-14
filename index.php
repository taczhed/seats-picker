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
    <title>Seats picker - filmy</title>
    <link href="css/bulma.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/all.css">
    <script defer src="js/fontawesome/brands.js"></script>
    <script defer src="js/fontawesome/solid.js"></script>
    <script defer src="js/fontawesome/fontawesome.js"></script>
    <script defer src="js/logout.js"></script>
    <script defer src="js/table.js"></script>
</head>
<body>

<div id="login-info"> Hi <span>
   <?php
       if(isset($_SESSION['user'])) echo $_SESSION['user'];
   ?></span>#<?php if(isset($_SESSION['id'])) echo $_SESSION['id'];?>!
</div>

<main class="columns is-vcentered">
    <div class="column is-half is-offset-3 block mt-4 p-6">
        <div class="columns">
            <div class="column is-2 is-offset-10">
                 <button class="button has-background-primary-dark has-text-white" id="logout" >Wyloguj</button>
            </div>
        </div>
        <div class="box">
        <p class="is-size-4 mb-4" >Filmy </p>
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth"></table>
        </div>
    </div>
</main>

</body>
</html>