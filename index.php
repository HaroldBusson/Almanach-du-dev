<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités</title>
</head>

<body>

    Bienvenue <?php $_POST['name'] && $_POST['firstname']; ?>

    <h2>Voci les dernieres actualités</h2>
    <?php $stmt = $pdo->query("SELECT * FROM comments ORDERBY DESC");
    ?>
    <h3><a href="logout.php">Me déconnecter</a></h3>
</body>

</html>