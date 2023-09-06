<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "./CompteBancaire.php";

$compte1 = new CompteBancaire("1234567890", "Pinco Pallo", "BE83791234567890", 12000, true);
$compte2 = new CompteBancaire("6789012345", "Caio Sempronio", "BE83446789012345", 30, false);

$compte1->afficher();
$compte2->afficher();

$compte1->enleverMontant(500); // tester
?>
</body>
</html>