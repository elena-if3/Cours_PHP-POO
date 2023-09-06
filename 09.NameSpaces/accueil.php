<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespaces</title>
</head>
<body>
    <?php
    include_once "./vendor/autoload.php";

    use \API\Client as ClientAPI;
    use \eCommerce\Gestion\Client as ClientECommerce;

    $c1 = new ClientAPI();
    $c2 = new ClientECommerce();

    ?>
</body>
</html>