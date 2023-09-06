<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil cinema</title>
</head>

<body>
    <?php

    // connexion
    require_once "./config/db.php";
    try {
        $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASSWORD);
    } catch (Exception $e) {
        echo "Erreur de connexion à la BD";
        die();
    }

    require_once "./Cinema.php";
    require_once "./CinemaManager.php";

    $c1 = new Cinema("Edera", "info@edera.com");
    $c2 = new Cinema("Toison d'Or", "contact@toisondor.be");

    // le but final
    $cm = new CinemaManager($cnx);
    $cm->insert($c1);
    $cm->insert($c2);

    ?>
</body>

</html>