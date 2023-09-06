<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association Plusieurs à Plusieurs - Exemple Cinemas Films</title>
</head>

<body>
    <?php
    require_once "./Cinema.php";
    require_once "./Film.php";
    require_once "./Seance.php";

    $f1 = new Film("Alien", 120);
    $s1 = new Seance(new DateTime());
    $s2 = new Seance(new DateTime("05-09-2023"));
    $c1 = new Cinema("Vendome", "info@vendome.be");

    // liens
    $f1->addSession($s1);
    $f1->addSession($s1);
    $c1->addSession($s2);
    $c1->addSession($s2);

    var_dump($f1);
    var_dump($s1);
    var_dump($s2);
    var_dump($c1);

    ?>
</body>

</html>