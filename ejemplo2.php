<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2</title>
    <link rel="stylesheet" href="ejemplo2.css">
</head>

<body>
    <main class="wrap">
        <?php
        $equipo = array(
            'portero' => 'Cech',
            'defensa' => 'Terry',
            'medio' => 'Lampard',
            'delantero' => 'Torres'
        );

        foreach ($equipo as $posicion => $jugador) {
            echo "El <strong>" . $posicion . "</strong> es " . $jugador . "<br>";
        }
        ?>
    </main>
</body>

</html>