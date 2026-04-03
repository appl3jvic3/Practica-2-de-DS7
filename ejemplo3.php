<?php

if (file_exists("colores.xml")) {
    $xml = simplexml_load_file("colores.xml");


    foreach ($xml->color as $color) {
        echo "El color <strong>" . $color->nombre . "</strong> tiene el código hexadecimal <strong>" . $color->codigo_hexadecimal . "</strong>.<br>";
    }
} else {
    echo "Error: No se encontró el archivo colores.xml en esta carpeta.";
}
