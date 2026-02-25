 <h1>Exercices - Les passages de données</h1>
 <h2>Exercice 1 :</h2>
 <p>
     1) Créer un fichier <code>exo7_resultats.php</code> dans le dossier exo (au même niveau que les fichiers exo1.php, exo2.php,...). <br>
     2) Méthode GET : Ici dans le fichier exo7.php, ajouter un lien comme dans le cours du chapitre 7 avec comme paramètre dans l'URL votre nom et votre prenom<br>
     Puis faire afficher le résultat dans la page <code>exo7_resultats.php</code><br>
     3) Méthode POST : Puis toujours ici, créer un formulaire pour saisir le nom et prénom comme dans le cours<br>
     Puis faire afficher le résultat dans la page <code>exo7_resultats.php</code><br>
     Tester avec plusieurs valeurs :)
 </p>

 <strong>Résultat :</strong>
 <br>

 <?php
    echo '<a href="exo7_resultats.php?nom=Pulles&prenom=Edgar">Lien avec parametres en GET</a>';


    ?>

    <form action="exo7_resultats.php" method="post">
         Prénom : <input type="text" name="prenom" />
         Nom : <input type="text" name="nom" />

        <input type="submit" value="valider"/>
    </form>