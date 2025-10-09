<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frutas = array("Manzana", "Plátano", "Naranja", "Fresa", "Uva");
    
        var_dump($frutas);
        echo "\n";

        print_r($frutas[2]);
        echo "\n";

        $frutas[] = "Mango";
        print_r($frutas);
        echo "\n";

        unset($frutas[1]);
        print_r($frutas);
        echo "\n";

        $frutas[0] = "Pera";
        print_r($frutas);
        echo "\n";
    ?>
</body>
</html>