<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
    ?>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $textoOriginal = "El perro corre por el parque y el perro ladra."; 
        $longitudTexto = strlen($textoOriginal);
        $textoModificado = str_replace("perro", "gato", $textoOriginal);

        echo "<p>La longitud original del texto es: <span id='longitudOriginal'>$longitudTexto</span></p>";
        echo "<p id='textoReemplazado'>$textoModificado</p>";
    ?>
</body>
>>>>>>> 752c90a (29/09)
</html>