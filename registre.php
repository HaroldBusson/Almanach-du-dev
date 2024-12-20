<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription à l'Almanach du dev !</title>
</head>

<body>
<h1><center>Formulaire d'inscription à l'Almanach du dev !</center></h1>
    <form action="/treatment.php" method="post"> <!-- Formulaire envoyé en methode post à la page treatment.php -->
        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="nom" name="nom" class="form-control" placeholder="Votre Nom" required>
            <br>
            <label for="Prenom"> Prenom :</label>
            <input type="prenom" name="firstname" placeholder="Votre Prénom" required>
            <br>
            <label for="age">Age :</label>
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
            <input type="email" id="email" name="user_mail" placeholder="Votre adresse email" required>
            <br>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Entrer votre mot de passe" required>
            <br>
        </div>
        <button type="submit" class="btn btn-primary">S'incrire</button>
    </form>

</body>

</html>

<?php
