<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animaux</title>
</head>

<body>
    <?php
    require_once "./Animal.php";
    require_once "./Chien.php";
    require_once "./Chat.php";

    $chien1 = new Chien("Billy", false);
    $chien2 = new Chien("Nero", true);

    $chat1 = new Chat("Pepe");
    $chat2 = new Chat("Cleo");
    $chat3 = new Chat("Camilla");

    $tabChats = [$chat1, $chat2, $chat3];

    foreach ($tabChats as $chat){
        $chat->jouer();
        $chat->miauler();
        $chat->manger();
        echo("<br>");
    }



    ?>
</body>

</html>