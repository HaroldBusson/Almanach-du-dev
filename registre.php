<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>
    
<form action="registre.php" method="post">
    <div class="form-group">
        <label for="name">Nom:</label>
     <input type="nom" name="nom" class="form-control" placeholder="Votre Nom" required>
     <br>
     <label for ="Prenom"> Prenom :</label>
     <input type = "prenom" name="firstname" placeholder = "Votre Prénom" required>
     <br>
     <label for = "age">Age :</label>
     <input type="number" id="age" name="age" required min="14">
     <br>
     <label for="sexe">Sexe :</label>
     <select id="sexe" name="sexe" required>
         <option value="Homme">Homme</option>
         <option value="Femme">Femme</option>
         <option value="Autre">Autre</option>
     </select><br>
     <label for="email">Courriel:</label>
     <br>
     <input type="email" id="email" name="user_mail" placeholder = "Votre adresse email" required>
     <br>
     <label for="password">Mot de passe</label>
     <input type ="password" name="password" placeholder="Entrer votre mot de passe" required>
     <br>
    </div>
     <button type="submit" class="btn btn-primary"> S'incrire</button>   
    </form>
     
</body>
</html>

<?php

/* page: registre.php */

 session_start();
 include_once('bd/gazettedonkey.php'); // fichier php contenant la connexion à la base de donnée

 if (isset($_SESSION['id'])){ // S'il y a une session alors on ne retourne plus sur cette page
    header('Location: index.php');
    exit;
 }

/* Si la variable $_POST contient des informations alors on les traites */
 if(!empty($_POST)){ 
    extract($_POST);
    $valid = true;
 }

 if (isset($_POST['inscription'])){ /* on choisit le formulaire */
    $name = htmlentities(trim($nom)); // On récupère le nom  htmlentities — Convertit tous les caractères éligibles en entités HTML
    $firstname = htmlentities(trim($firsname)); // On récupère le prénom
    $age = htmlentities(trim($age)); // on récupère l'age
    $email  = htmlentities(strtolower(trim($email))); // on recupère le email
    $password = htmlentities(trim($password)); // on recupère le mot de passe 
    $confpassword = htmlentities(trim($confpassword));  // on récupère la confirmation du mot de passe

 }

 if(empty($name) || !is_string($name)){
    $valid = false;
    $errorName = ("Le nom utilisateur ne peut pas être valide");
 }

 if(empty($firstname) || !is_string($firsname)){
    $valid = false;
    $errorFirstname = ("Le prénom ne peut pas être valide");
 }
 if(empty($age) || !is_int($age) || $age < 14){
    $valid = false;
    $errorAge = ("L'age n'est pas valide");
 }
 if (empty($email) || !is_string($email)){
    $valid = false;
    $errorEmail = ("Le mot de passe est erroné");
 }
if (empty($password)){
   $valid= false;
   $errorPassword = ("Veuillez saisir un mot de passe");
}
if (!empty($errors)){
   foreach($serrors as $error){
      echo "$error";
   }
   exit;  // Arreter l'execution du code s'il y des erreurs
}
$passwordHache = $passwordHash($password, PASSWORD_DEFAULT); //hachage du mot de passe

$sql = "INSERT INTO users ($name, $firstname, $age, $sexe, $passwordHache, $email) VALUES(?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql); // prepare() crée une déclaration préparée pour exécuter une requête SQL en toute sécurité.
$stmt->bind_param("sss", $nom, $prenom, $age, $sexe, $motdepasse_hache, $email); // La fonction $stmt->bind_param() lie les variables aux paramètres d'une requête préparée, permettant une exécution sécurisée des requêtes SQL
    
    if(stmt->execute()){
      echo "Inscription réussie !";
    } else{
      echo "Erreur" . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    ?>