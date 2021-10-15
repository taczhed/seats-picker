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
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/fontawesome/brands.js"></script>
    <script defer src="js/fontawesome/solid.js"></script>
    <script defer src="js/fontawesome/fontawesome.js"></script>
    <script defer src="js/app.js" type="module"></script>

</head>
<body>

<div id="login-info">
Hi <span><?php if(isset($_SESSION['user'])) echo $_SESSION['user'];?></span>!
</div>

<main class="columns">
    <div class="column is-4-desktop is-8-tablet is-offset-4-desktop is-offset-2-tablet block mt-4 p-2">
         <section class="hero has-background-primary-dark is-small">
                <div class="hero-body">
                    <p class="title has-text-white has-text-centered">
                        <?php
                            require_once './php/db.php';
                            $sql = "SELECT movie FROM rooms WHERE id = '$_GET[id]'";
                            $result = mysqli_query($conn, $sql);
                            $row = $result->fetch_row();
                            echo $row[0];
                        ?>
                    </p>
                </div>
        </section>
        <figure class="image">
            <img id="bgc" alt="bg" src="img/bg.jpg">
        </figure>
        <div id="app" class="box"></div>
        <div class="columns is-vcentered">
             <div class="column is-1 is-offset-4 seat free"></div>
             <div class="column is-4 p-1">wolne miejsce</div>
        </div>
        <div class="columns is-vcentered">
             <div class="column is-1 is-offset-4 seat selected"></div>
             <div class="column is-4 p-1">wybrane miejsce</div>
        </div>
        <div class="columns is-vcentered">
             <div class="column is-1 is-offset-4 seat occupied ml-8"></div>
             <div class="column is-4 p-1">zajęte miejsce</div>
        </div>
        <div class="block has-text-centered">
            <button class="button has-background-primary-dark has-text-white" id="reserve" >Potwierdź miejsca</button>
        </div>
    </div>
</main>

</body>
</html>