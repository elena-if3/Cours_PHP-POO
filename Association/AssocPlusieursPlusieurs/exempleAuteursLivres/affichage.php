<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple Auteurs Livres - affichage</title>
</head>

<body>
    <?php
    require_once "./Auteur.php";
    require_once "./Livre.php";

    $l1 = new Livre ("978-1-5011-6340-1", "Sleeping Beauties");
    $l2 = new Livre ("978-0-385-08695-0", "Carrie");

    $a1 = new Auteur("King", "Stephen", "USA");
    $a2 = new Auteur("King", "Owen", "USA");

    var_dump($l1);
    var_dump($l2);
    var_dump($a1);
    var_dump($a2);


    ?>
</body>

</html>