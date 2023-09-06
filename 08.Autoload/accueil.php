<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "./vendor/autoload.php";
    
    $c1 = new Contact("Dupont", "paco", "0485963147");
    var_dump($c1);


    ?>
</body>
</html>