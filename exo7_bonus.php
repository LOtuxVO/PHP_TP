<?php
 $identifiant = htmlspecialchars($_POST['identifiant']);
 $mdp = htmlspecialchars($_POST['mdp']);

    if ($identifiant == "admin" && $mdp == "1234") {
        echo "Bienvenue sur la page du site";
    } else {
        echo "Erreur d'authentification";
    }
?>