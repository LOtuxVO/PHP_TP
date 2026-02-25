<h2>Exercice 2 :</h2>
 <p>
     Continuer l'exercice 1 - 3), où grâce à la méthode post, on va à présent récupérer l'âge de la personne et le sexe de la personne pour reprendre les conditions des exercices du chapitre 3 !<br><br>
     Créer tout d'abord les champs de saisi pour l'âge, attention quand on récupérera sa valeur car si on saisi 16, on va en réalité récupérer "16" et non 16. Pour transformer cela en entier, il faut utiliser la fonction <a href="http://php.net/manual/fr/function.intval.php">intval</a><br>
     Puis créer des radio boutons pour le sexe, attention la valeur retournée sera celle inscrite dans la <code>value</code> de l'<code>input</code> <br><br>
     Continuer le formulaire de l'exercice 1 et récupérer les résultats dans le fichier <code>
         exo7_resultats.php</code>. Tester votre code par rapport aux conditions de l'<strong>exercice 3 du chapitre 3</strong> !
 </p>

<form action="exo7_resultats.php" method="post">
     Age : <input type="text" name="age" />

    <input type="radio" name="sexe" value="Homme"/> Homme
    <input type="radio" name="sexe" value="Femme"/> Femme

    </br>
    <input type="submit" value="valider"/>
</form>
