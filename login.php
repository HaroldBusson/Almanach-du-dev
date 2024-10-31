<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    

<form action="" method="post">
<label for="login"> Login :</label>
<input type="text" id="name" name="user_name">
<br>
<label for="password"> Mot de passe:</label>
<input type="text" id="password" name="password" >

</form>
</body>
</html>

<?php 

$conn = new mysqli("localhost", "root", "", "Gazettedonkey");

if (isset($_POST['login']) && isset($_POST['password'])) {  // Si le login et le mot de passe envoyés sont corrects
    echo "Connexion réussie Bienvenue sur votre réseau social"; 
}
    if(empty($_POST('login'))){ // Si login envoyé est vide
        echo "Erreur ! Veuillez saisir votre login. \n"; 
    }
        if (empty($_POST['password'])) { // si le mot de passe envoyé est vide
    } echo "Erreur ! Veuillez sasir votre mot de passe. \n";

$sql = "SELECT name, email, firstname FROM user WHERE  = $utilisateur_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Affichage des données de l'utilisateur
    while ($row = $result->fetch_assoc()){ 
     echo "Nom: " . $row["nom"]. " - Email: " . $row["email"] . "\n";
        }
    } else {
        echo 'Aucun utilisateur trouvé avec cet ID . \n';
    }

?>