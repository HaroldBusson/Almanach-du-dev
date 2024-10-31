
<?php
$dbh = new PDO('mysql:host=localhost;dbname=gazettedonkey', $user, $password);
// utiliser la connexion ici
$sth = $dbh->query('SELECT * FROM user');

/* et maintenant, fermez-la ! */
$sth = null;
$dbh = null;

?>
