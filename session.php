<?php
/* page: session.php */
// Si le formulaire est soumis, créer les cookies
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // vérifie si la requête a été envoyé en methode post
    setcookie('username', $_POST['username'], time() + 3600); // Il stocke la valeur du champ username du formulaire pendant 1 heure
    setcookie('', $_POST['password'], time() + 3600); // Il stocke la valeur du champ password du formulaire pendant 1 heure
    header("Location: index.php" . $_SERVER['PHP_SELF']); // le code redirige l'utilisateur vers la même page ($_SERVER['PHP_SELF'] représente l'URL de la page en cours)
    exit();
}

// Si le bouton "Réinitialiser" est cliqué, supprimer les cookies
if (isset($_POST['reset'])) {   // vérifie si le formulaire a été soumis avec un champ nommé reset
    setcookie('username', '', time() - 3600);  // les cookies username en le définissant avec une valeur vide ('') et une date d'expiration dans le passé
    setcookie('password', '', time() - 3600); // les cookies password en le définissant avec une valeur vide ('') et une date d'expiration dans le passé
    header("Location: index.php " . $_SERVER['PHP_SELF']);
    exit();
} else {
    $error = "Nom d'utilisateur ou mot de passe incorrect.";
}
