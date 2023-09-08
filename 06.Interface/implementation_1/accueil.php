<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "./vendor/autoload.php";

    $v1 = new Voiture("DY006FZ");
    // var_dump($v1);
    $v1->afficher();
    $v1->rouler();
    $v1->claxonner();

    $h1 = new Hovercraft("HOV123654");

    $h1->afficher();
    $h1->naviguer();
    $h1->voler();

    // envoyer un objet en paramètre sans connaître le type

    function afficherDansDiv(Vehicule $vehicule) : void
    {
        print("<div>");
        $vehicule->afficher();
        print("</div>");
    }

    echo "<hr>";

    afficherDansDiv($h1);

    // envoyer un objet en paramètre sans connaître le type

    function demarreVol(IVolant $vehicule): void
    {
        print("<div>");
        $vehicule->voler();
        print("</div>");
    }

    echo "<hr>";

    afficherDansDiv($h1);
    demarreVol($h1);

    ?>
</body>
</html>