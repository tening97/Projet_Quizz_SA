<?php
require_once(PATH_SRC . "models" . DIRECTORY_SEPARATOR . "user.models.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "connexion") {
            $login = $_POST['login'];
            $password = $_POST['password'];
            connexion($login, $password);
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] == "connexion") {
            require_once(PATH_VIEWS . "securite" . DIRECTORY_SEPARATOR . "connexion.html.php");
        }
    } else {
        require_once(PATH_VIEWS . "securite" . DIRECTORY_SEPARATOR . "connexion.html.php");
    }
}

function connexion(string $login, string $password): void
{
    $errors = [];
    champ_obligatoire('login', $login, $errors);
    if (count($errors) == 0) {
        valid_email('login', $login, $errors);
    }
    champ_obligatoire('password', $password, $errors);
    if (count($errors) == 0) {
        //Appel d'ne fonction  du models
        $user = find_user_login_password($login, $password);
        if (count($user) != 0) {
            //Utilisateur Existe
            $_SESSION["user-connect"] = $user;
            //?controller=user&action=connexion 
            header("location:" . WEBROOT . "?controller=user&action=accueil ");
            exit();
        } else {
            //Utilisateur n'existe pas 
            $errors['connexion'] = "Login ou Mot de pass Incorrect";
            $_SESSION['errors'] = $errors;
            header("location:" . WEBROOT);
            exit();
        }
    }
    //Erreur de validation
    else {
        $_SESSION['errors'] = $errors;
        header("location:" . WEBROOT);
        exit();
    }
}
