<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php
    include_once "./Contact.php";
    include_once "./Repertoire.php";

    $c1 = new Contact("Garcia", "Emilie", "0485963147");
    $c2 = new Contact("Dupont", "Hsin-I", "0497856314");
    $c3 = new Contact("Oliveira", "Vitoria", "0490753159");

    $r1 = new Repertoire("perso", "Contacts personnels");
    $r1->addContact($c1);
    $r1->addContact($c2);
    $r1->addContact($c3);

    var_dump($r1);

    ?>
</body>
</html>