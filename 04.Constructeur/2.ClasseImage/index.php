<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Image</title>
    <style>
        img{
            width: 300px;
        }
    </style>
</head>
<body>
<?php
include "./Image.php";

$img1 = new Image("./images/pomme.jpg", "Photo de pommes");
$img2 = new Image("./images/banane.jpg", "Photo de bananes");

$img1->afficher();
$img2->afficher();

?>    
</body>
</html>