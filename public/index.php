<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//Charger les constantes
require_once dirname(dirname(__FILE__)) . "/config/constantes.php";
//Charger le validator
require_once dirname(dirname(__FILE__)) . "/config/validator.php";
//Charger le role
require_once dirname(dirname(__FILE__)) . "/config/role.php";
//Charger l'orm
require_once dirname(dirname(__FILE__)) . "/config/orm.php";
//Charger le router
require_once dirname(dirname(__FILE__)) . "/config/router.php";
