<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= WEBROOT . "css" . DIRECTORY_SEPARATOR . "style.connexion.css" ?>">
    <title>QUIZZ SA</title>
</head>

<body>
    <div id="container">

        <form action="<?= WEBROOT ?>" method="post">
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="connexion">
            <div class="entete">
                <span>Login form </span>
            </div>
            <div class="items">
                <input type="text" name="login" placeholder="Login" value="<?php if (isset($_SESSION['login'])) {
                    echo $_SESSION['login'];
                } ?>">
                <img src="<?= WEBROOT . "img" . DIRECTORY_SEPARATOR . "ic-login.png" ?>" alt="">
                <?php if (isset($_SESSION['errors']['login'])) {
                ?>
                    <span>
                    <?php

                    echo $_SESSION['errors']['login'];
                }

                    ?>

                    </span>

            </div>
            <div class="items">
                <input type="password" name="password" placeholder="Password">
                <img src="<?= WEBROOT . "img" . DIRECTORY_SEPARATOR . "ic-password.png" ?>" alt="">
                <?php if (isset($_SESSION['errors']['password'])) {
                ?>
                    <span>
                    <?php

                    echo $_SESSION['errors']['password'];
                }
                    ?>
                    </span>
            </div>
            <button type="submit" name="btn_con">Connexion</button>
            <a href="">S'inscrire pour jouer</a>

        </form>
    </div>
    <?php
    if (isset($_SESSION['errors'])) {
        unset($_SESSION['errors']);
    }
    ?>
</body>

</html>