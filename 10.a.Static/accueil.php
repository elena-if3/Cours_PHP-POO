<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static</title>
</head>
<body>
    <?php
    require_once "./Medecin.php";

    $m1 = new Medecin("253614", "Margot");
    $m2 = new Medecin("864957", "Dorine");

    var_dump($m1);
    var_dump($m2);

    Medecin::setSerment ("Soigner");
    
    // Medecin::$serment = "Traiter encore mieux les patients.";
    print ("<br>" . Medecin::getSerment() . "<br>");

    ?>
</body>
</html>