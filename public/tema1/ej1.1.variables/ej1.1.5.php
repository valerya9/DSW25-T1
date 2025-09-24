<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor_float = 99.99;
        $valor_int = (int)$valor_float;
    ?>

    <div id="entero1">
        <?php var_dump($valor_int); ?>
    </div>

    <?php
        $valor_string_num = "50";
        $valor_int_desde_string = (int)$valor_string_num;
    ?>

    <div id="entero2">
        <?php var_dump($valor_int_desde_string); ?>
    </div>

    <?php
        $valor_cero = 0;
        $valor_bool_desde_cero = (bool)$valor_cero;
    ?>
    
    <div id="booleano">
        <?php var_dump($valor_bool_desde_cero); ?>
    </div>
</body>
</html>