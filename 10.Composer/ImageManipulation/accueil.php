<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "./vendor/autoload.php";

    use Spatie\Image\Image;

    // Image::load("./images/Nokota_Horses_cropped.jpg")
    //     ->greyscale ()
    //     ->save ("./images/horses-grey.jpg");

    // $im3 = new Image ("./images/horses.jpg");
    // $im3->sepia ();
    // $im3->save ("./images/horses-sepia.jpg");

    // utiliser Faker
    use Faker\Factory;

    $faker = Factory::create("bn_BD");
    $unNom = $faker->name();
    echo ("<h4>Bonjour " . $unNom . "</h4>");

    


    
    ?>
</body>
</html>