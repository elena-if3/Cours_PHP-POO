<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include "./Contact.php";
include "./ContactNew.php";

$c1 = new Contact("Dupont","Margot","0495258147");
$c2 = new Contact("Nimri","Najoua","0470159753");

$c1->afficher();
$c2->afficher();

$c2->setNom("Van Volxem")->setPrenom("Laurence");
$c2->afficher();

$cn1 = new ContactNew("Dupont","Margot","0495258147");
$cn2 = new ContactNew("Nimri","Najoua","0470159753");

$cn1->afficher();
$cn2->afficher();

?>
</body>
</html>