<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        // 1e façon de faire
        function somme(v1, v2) {
            return (v1 + v2);
        };

        console.log(somme(10, 20));

        // 2e façon de faire
        let somme2 = function(v1, v2) {
            console.log("somme2")
            return (v1 + v2);
        }

        console.log(somme2(10, 40));

        // fonction flechée (arrow function)
        let somme3 = (v1, v2) => {
            console.log("somme3 (=>)")
            return (v1 + v2);
        };

        console.log(somme3(20, 50));

        // simplification de l'arrow
        let somme4 = (v1, v2) => v1 + v2;

        console.log("somme4 (=> simplifiée)");
        console.log(somme4(100, 50));
    </script>
</body>

</html>