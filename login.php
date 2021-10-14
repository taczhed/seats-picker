<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: /');
    }
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Seats picker - logowanie</title>
    <link href="../css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/fontawesome/all.css">
    <script defer src="../js/login.js" type="module"></script>
    <script defer src="../js/notification.js" type="module"></script>
    <script defer src="../js/fontawesome/brands.js"></script>
    <script defer src="../js/fontawesome/solid.js"></script>
    <script defer src="../js/fontawesome/fontawesome.js"></script>
</head>
<body>

    <main class="columns is-vcentered">
        <div class="column is-half is-offset-3 block mt-4 p-6">
            <section class="hero has-background-primary-dark is-small">
                <div class="hero-body">
                    <p class="title has-text-white">
                        Logowanie
                    </p>
                </div>
            </section>
           <div class="box">
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input id="login" class="input" type="text" placeholder="Login">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input id="password" class="input" type="password" placeholder="Hasło">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>
            <p class="help">
                Jeśli nie masz konta, <a href="register.php">zarejestruj się!</a>
            </p>
            <div class="field">
                <p class="control">
                    <button class="button has-background-primary-dark has-text-white mt-2" id="login-button">Zaloguj</button>
                </p>
            </div>
           </div>
        </div>
    </main>

</body>
</html>