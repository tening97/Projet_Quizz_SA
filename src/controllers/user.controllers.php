<?php
require_once(PATH_SRC . "models" . DIRECTORY_SEPARATOR . "user.models.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['action'])) {
        if ($_REQUEST['action'] == "accueil") {
            require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "accueil.html.php");
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['action'])) {
        if (!is_connect()) {
            header("location:" . WEBROOT);
            exit();
        }
        if ($_REQUEST['action'] == "accueil") {
            require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "accueil.html.php");
        } elseif ($_REQUEST['action'] == "liste.joueur") {
            lister_joueur();
        }
    }
}

function lister_joueur()
{
    $data = find_users(ROLE_JOUEUR);
    require_once(PATH_VIEWS . "user" . DIRECTORY_SEPARATOR . "liste.joueur.html.php");
}
