<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./JeuSociete.php";
    include "./Personne.php";
    // include "./Film.php";

    $j1 = new JeuSociete("Virus", 2, 4);
    $j1->afficher();
    $j2 = new JeuSociete("Dixit", 2, 5);
    $j2->afficher();
    $j2->jouer();

    // $film1 = new Film ("Matrix", 150, 1000);
    // $film1->afficher();
    // print ("Le titre du film #1 est: " . $film1->getTitre() . "<br/>");
    // $film1->setTitre("The green butchers");
    // $film1->setPrix(-100);

    // // si dans la class l'attribut "prix" est "private", je reçois l'erreur "Cannot access private property"
    // print ("Le prix du film #1 est: " . $film1->prix . "<br/>");

    var_dump($j1);
    var_dump($j2);

    // création de FilmH

    include "./FilmH.php";

    $film2 = new Film (["titre" => "Emma",
                        "duree" => 180,
                        "prix" => 2000]);

    var_dump($film2);

    
    ?>
</body>

</html>