<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valorA = "10";
        $valorB = 10;
        
        echo "Comparación estricta igual: <span id='comparacionEstrictaIgual'>" . ($valorA === $valorB ? "true" : "false") . "</span>\n";
        echo "Comparación estricta diferente: <span id='comparacionEstrictaDiferente'>" . ($valorA !== $valorB ? "true" : "false") . "</span>\n";
        echo "valorA es igual a valorB y valorA es un string: <span id='logicoAnd'>" . (($valorA == $valorB) && (gettype($valorA) == "string")? "true" : "false") . "</span>\n";
        echo "valorA es un entero o valorB es un string: <span id='logicoOr'>" . ((gettype($valorA) == "integer") || ((gettype($valorB) == "string"))? "true" : "false") . "</span>\n";
    ?>    
</body>
</html>