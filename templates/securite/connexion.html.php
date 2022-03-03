<?php
require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "header.inc.html.php");
if (isset($_SESSION[KEY_ERROR])) {
    $errors = $_SESSION[KEY_ERROR];
    unset($_SESSION[KEY_ERROR]);
}

?>
<link rel="stylesheet" href="<?= WEBROOT . "css" . DIRECTORY_SEPARATOR . "style.connexion.css" ?>">

<div id="container">
    <div class="entete">
        <h2>Login form</h2>
    </div>
    <form action="<?= WEBROOT ?>" method="post">
        <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="connexion">

        <?php if (isset($errors['connexion'])) {
        ?>
            <span style="color: red;">
            <?= $errors['connexion'];
        }

            ?>

            </span>
            <div class="items">

                <input type="text" name="login" placeholder="Login" value="">

                <img src="<?= WEBROOT . "img" . DIRECTORY_SEPARATOR . "ic-login.png" ?>" alt="">
                <?php if (isset($errors['login'])) {
                ?>
                    <span style="color: red;">
                    <?= $errors['login'];
                }

                    ?>

                    </span>

            </div>
            <div class="items">
                <input type="password" name="password" placeholder="Password">
                <img src="<?= WEBROOT . "img" . DIRECTORY_SEPARATOR . "ic-password.png" ?>" alt="">
                <?php if (isset($errors['password'])) {
                ?>
                    <span style="color: red;">
                    <?php

                    echo $errors['password'];
                }
                    ?>
                    </span>
            </div>
            <div class="items" id="items">
                <button type="submit" name="btn_con">Connexion</button>
                <a href="">S'inscrire pour jouer</a>
            </div>

    </form>
</div>