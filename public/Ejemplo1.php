<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplo 1</h1>
    <?php 
        echo "<h2>Hola mundo\n</h2>";
    ?>
    <h3>
        <?php
            echo "Hola mundo\n";
        ?>
    </h3>
    <?php
        $name= "Valery";
        echo "Tu nombre es $name";
    ?>
    <p>Repite tu nombre</p>
    <?php
        echo "Mi nombre es $name";

        // Comentario php 
        
        /*
        Varias  
        lineas
        de
        comentario
        **/
    ?>
</body>
</html>