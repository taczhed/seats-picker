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

<div id="login-info">
Hi <span><?php if(isset($_SESSION['user'])) echo $_SESSION['user'];?></span>!
</div>

<main class="columns is-vcentered">
    <div class="column is-8 is-offset-2 block mt-4 p-6">
        <div class="container has-text-right py-2">
            <button class="button has-background-primary-dark has-text-white" id="logout" >Wyloguj</button>
        </div>

        <section class="hero has-background-primary-dark is-small">
          <div class="hero-body">
            <p class="title has-text-white">
              Repertuar
            </p>
          </div>
        </section>

        <div class="box">
        <table class="table is-bordered is-striped is-fullwidth"></table>
        </div>
    </div>
</main>

</body>
</html>