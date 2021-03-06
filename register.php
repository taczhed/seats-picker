<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Seats picker - rejestracja</title>
    <link href="css/bulma.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/all.css">
    <script defer src="js/fontawesome/brands.js"></script>
    <script defer src="js/fontawesome/solid.js"></script>
    <script defer src="js/fontawesome/fontawesome.js"></script>
    <script defer src="js/register.js" type="module"></script>
    <script defer src="js/notification.js" type="module"></script>

</head>
<body>

<main class="columns is-vcentered">
    <div class="column is-half is-offset-3 block mt-4 p-6">
        <section class="hero has-background-primary-dark is-small">
            <div class="hero-body">
                <p class="title has-text-white">
                    Rejestracja
                </p>
            </div>
        </section>
        <div class="box">
            <div class="field">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field is-expanded">
                        <div class="field has-addons">
                            <p class="control">
                                <a class="button is-static">
                                    +48
                                </a>
                            </p>
                            <p class="control is-expanded">
                                <input id='tel' class="input" type="tel" placeholder="Numer telefonu">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input id='login' class="input" type="text" placeholder="Login">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input id='password' class="input" type="password" placeholder="Has??o">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input id='sec-password' class="input" type="password" placeholder="Potw??rz has??o">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>
            <p class="help">
                Je??li posiadasz ju?? konto, <a href="login.php">zaloguj si??</a>!
            </p>
            <div class="field">
                <p class="control">
                    <button id="register" class="button has-background-primary-dark has-text-white mt-2">Zarejestruj</button>
                </p>
            </div>
        </div>
    </div>
</main>

</body>
</html>