<?php
 echo "en GET : nom : " . $_GET['nom'] . ", prenom : " . $_GET['prenom']."<br>";
 echo "en POST : nom : " . $_POST['nom'] . ", prenom : " . $_POST['prenom']."<br>";
?> </br></br>

<?php
 $age = intval($_POST['age']);
 $sexe = $_POST['sexe'];

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