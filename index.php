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
    <link rel="stylesheet" href="css/fontawesome/all.css">
    <script defer src="js/fontawesome/brands.js"></script>
    <script defer src="js/fontawesome/solid.js"></script>
    <script defer src="js/fontawesome/fontawesome.js"></script>
    <script defer src="js/logout.js"></script>
</head>
<body>

<main class="columns is-vcentered">
    <div class="column is-half is-offset-3 block mt-4 p-6">
        <div class="box">
            <div class="field">
                <p class="control">
                    <button class="button has-background-primary-dark has-text-white mt-2" id="logout" >Wyloguj</button>
                </p>
            </div>

            <div id="status">
            <?php
                if(isset($_SESSION['user'])) echo $_SESSION['user'];
            ?>
            </div>
        </div>
    </div>
</main>

</body>
</html>