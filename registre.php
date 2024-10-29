<?php

/* page: registre.php */
 
$BDD['host'] = "localhost";  // connexion à la base de donnée
$BDD['db'] = "gazettedonkey";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['password'], $BDD['db']);
echo "Connexion établie . ";

if (isset($_POST['firstname'],$_POST['password'])){ // l'utilsateur à cliqué sur S'inscrir, on demande donc si les champs sont définis avec isset
}elseif{ (empty($_POST['firstname'])) // le champ pseudo est vide, on arrête l'execution du script
echo "Veuillez sasiir les champs requis. "; // Affichage un message d'erreur
}
    <form method="get" action="sql.php">
        <label for="name">Nom:</label>
     <input type="nom" name="nom">
     <br>
     <label for="email">Courriel:</label>
     <br>
     <input type="email" id="email" name="user_mail">
     <br>
     <label for="password">Mot de passe</label>
     <br>
     <input type="submit" name="submit" value="Search">   
    </form>
     
    if (!empty(name, password, email, age, sexe)){ // si les champs sont remplis
        $sql = INSERT INTO  email, age, sexe ;  // injection dans la base de donné
    }else{
        echo " Veuillez saisir les champs demandés";  // sinon il faut sasir les champs vides
    }
    ?>