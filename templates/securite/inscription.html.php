<?php

?>
<link rel="stylesheet" href="<?= WEBROOT . "css" . DIRECTORY_SEPARATOR . "style.inscription.css" ?>">
<div class="container1">
    <div class="gauche">
        <div class="titre">
            <h3>S'INSCRIRE</h3>
            <p>Pour tester votre niveau de culture générale</p>
        </div>
        <div class="form">
            <form action="<?= WEBROOT ?>" method="POST">
                <input type="hidden" name="controller" value="securite">
                <input type="hidden" name="action" value="inscription">
                <div class="div">
                    <label for="">Prénom</label>
                    <input type="text" id="prenom" name="prenom">
                </div>
                <div class="div">
                    <label for="">nom</label>
                    <input type="text" id="nom" name="nom">
                    <span></span>
                </div>
                <div class="div">
                    <label for="">login</label>
                    <input type="text" id="login" name="login">
                </div>
                <div class="div">
                    <label for="">Mot de passe</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="div">
                    <label for="">Confirmer mot de passe</label>
                    <input type="password" id="password1" name="password1">
                </div>
                <div>
                    <label for="fichier">choisir un fichier</label>
                    <input type="file" title=" " id="fichier" name="fichier" id="fichier">
                    <!-- <button>choisir un fichier</button> -->
                </div>

                <button id="creer">Créer un compte</button>
            </form>
        </div>
    </div>
    <div class="droite">
        <div class="droite1">
            <img src="<?= WEBROOT . "img" . DIRECTORY_SEPARATOR . "avatar.jpg" ?>" alt="" width="220px" height="220px" class="img1">
        </div>
    </div>
</div>