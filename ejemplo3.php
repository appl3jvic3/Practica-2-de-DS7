<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 3</title>
    <link rel="stylesheet" href="./ejemplo3.css">
</head>

<body>
    <main class="wrap">
        <?php
        if (file_exists("colores.xml")) {
            $xml = simplexml_load_file("colores.xml");

            foreach ($xml->color as $color) {
                echo "El color <strong>" . $color->nombre . "</strong> tiene el código hexadecimal <strong>" . $color->codigo_hexadecimal . "</strong>.<br>";
            }
        }

        ?>
    </main>
</body>

</html>