<?php
 echo "en GET : nom : " . htmlspecialchars($_GET['nom']) . ", prenom : " . htmlspecialchars($_GET['prenom'])."<br>";
 echo "en POST : nom : " . htmlspecialchars($_POST['nom']) . ", prenom : " . htmlspecialchars($_POST['prenom'])."<br>";
?> </br></br>

<?php
 $age = intval(htmlspecialchars($_POST['age']));
 $sexe = htmlspecialchars($_POST['sexe']);

    if ($sexe == "Homme") {
        if ($age < 18) {
            echo "Bonjour jeune homme";
        } else {
            echo "Bonjour monsieur";
        }
    } elseif ($sexe == "Femme") {
        if ($age < 18) {
            echo "Bonjour jeune fille";
        } else {
            echo "Bonjour madame";
        }
    }
?>