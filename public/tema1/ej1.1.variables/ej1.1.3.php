<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Mostrar la diferencia entre const y define()

        /*
        const define constantes en tiempo de compilación, 
        funciona en clases/namespaces y permite visibilidad.

        define() crea constantes en tiempo de ejecución, 
        siempre son globales y no admiten visibilidad en clases.dddd
        **/
        const VERSION_PHP = '8.4';
        define('IS_TEST_MODE_ACTIVE', false);
    ?>
    <p> <?php echo 'Versión de PHP: ' . VERSION_PHP ?> </p>
    <p><?php echo 'Test mode: ' . IS_TEST_MODE_ACTIVE ?></p>
</body>
</html>