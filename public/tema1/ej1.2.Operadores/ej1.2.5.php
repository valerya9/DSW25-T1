<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $contador = 5;
        $a = ++$contador;
        $contador = 5;
        $b = $contador++;

        echo "<div id='valorA'>$a</div>\n";
        echo "<div id='valorB'>$b</div>\n";
        echo "<div id='resultadoTernario'>" . ($a > $b ? "A es mayor" : "B es mayor o igual") . "</div>\n";

    ?>
</body>
</html>