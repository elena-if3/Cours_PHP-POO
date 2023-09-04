<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple Personne Passeports - accueil</title>
</head>

<body>
    <?php
    require_once "./Passeport.php";
    require_once "./Personne.php";

    $pp1 = new Passeport("VZ1234567", new DateTime("25-12-2025"));
    $pp2 = new Passeport("NP9517534", new DateTime("01-06-2028"));
    $pp3 = new Passeport();


    $prs1 = new Personne("Iankovich", "Marina");

    $prs1->addPassport($pp1);
    $prs1->addPassport($pp2);
    $prs1->addPassport($pp3);

    var_dump($prs1);

    $pp1->display();

    $prs1->afficherPasseports();

    ?>
</body>

</html>