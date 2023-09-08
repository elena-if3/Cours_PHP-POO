<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // fonction en tant qu'instruction
    function bonjour()
    {
        print("<br>Bonjour PHP!");
    }
    bonjour();

    // 1. fonction dans une variable (=fonction anonyme)
    $adieu = function () {
        print("<br>Adieu!");
    };
    $adieu();

    $manger = function () {
        print("<br>On mange");
    };

    // // on peut crèer de tableaux!
    // $tab = [$adieu, $manger];

    // foreach ($tab as $uneFonction){
    //     $uneFonction();
    // }

    // 2. envoyer une fonction comme paramètre

    // on veut appliquer plusieurs fonctions à un tableau. Traditionellement on fera:
    $noms = ['Lola', 'Najoua', 'Hsin-I', 'Margot'];
    // fonction qui renvoie un nouvel array où tous le noms sont en majuscule
    $fnMajuscules = function (array $tab) {
        $tabMajuscules = [];
        foreach ($tab as $nom) {
            $tabMajuscules[] = strtoupper($nom);
        }
        // renvoyer le tableau qu'on vient de créer
        return $tabMajuscules;
    };
    var_dump($fnMajuscules($noms));

    $fnMinuscules = function (array $tab) {
        $tabMinuscules = [];
        foreach ($tab as $nom) {
            $tabMinuscules[] = strtolower($nom);
        }
        // renvoyer le tableau qu'on vient de créer
        return $tabMinuscules;
    };
    var_dump($fnMinuscules($noms));

    // on va utiliser une autre approche: une fonction qui reçoit la fonction à appliquer en paramètre (CALLBACK)
    $fnMajElement = function ($elem) {
        $elemMaj = strtoupper($elem);
        return $elemMaj;
    };

    $fnMinElement = function ($elem) {
        $elemMin = strtolower($elem);
        return $elemMin;
    };

    $parcourirArray = function (array $noms, callable $uneFonction) {
        $nouveauxNoms = [];
        foreach ($noms as $nom) {
            $nouveauxNoms[] = $uneFonction($nom);
        }
        return  $nouveauxNoms;
    };
    // appel
    var_dump($noms);
    var_dump($parcourirArray($noms, $fnMajElement));

    var_dump (array_map($fnMajElement, $noms));

    ?>

    <script>
        // fonction en tant qu'instruction
        function bonjour() {
            console.log("<br>Bonjour JS!");
        }
        bonjour();

        // fonction dans une variable (=fonction anonyme)
        let adieu = function() {
            console.log("Adieu!");
        }
        adieu();

        // tableau de noms
        let noms = ['Lola', 'Najoua', 'Hsin-I', 'Margot'];

        let fnMajElement = function (elem) {
        let elemMaj = elem.toUpperCase();
        return elemMaj;
        };
        console.log (fnMajElement("parapappa"));
        
        let fnMinElement = function (elem) {
        let elemMin = elem.toLowerCase();
        return elemMin;
        };
        console.log (fnMinElement("BLABLABLA"));

        // fonction map -> transforme et renvoie le résultat de la transformation
        let nomsMajs = noms.map (fnMajElement);
        console.log (nomsMajs);

        // exemple de forEach
        noms.forEach (function (val, index){
            console.log (val);
        });

        // utilisation de forEach pour "essayer" de convertir l'array en majuscule -> se limite à effectuer la transformation
        // requise mais ne renvoie rien!
        noms.forEach (fnMajElement);    // il n'y a pas de return!!! (à utiliser quand on n'a pas besoin de renvoyer un array)

    </script>
</body>

</html>