<?php
require_once(PATH_VIEWS . "include" . DIRECTORY_SEPARATOR . "header.inc.html.php")
?>

<link rel="stylesheet" href="<?= WEBROOT . "css" . DIRECTORY_SEPARATOR . "style.accueil.css" ?>">

<ul>
    <li><a class="active" href="<?= WEBROOT . "?controller=user&action=accueil" ?>">Accueil</a></li>
    <?php
    if (is_admin()) :
    ?>
        <li><a href="<?= WEBROOT . "?controller=user&action=liste.joueur" ?>">Liste joueur</a></li>
    <?php endif ?>


    <li><a href="<?= WEBROOT . "?controller=securite&action=deconnexion" ?> ">Deconnexion</a></li>

</ul>