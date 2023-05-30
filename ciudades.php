<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyJD - Ofertas de vuelos desde </title>
    <!--        CSS                  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        
    <?php
        $destino = $_POST['destino'] ?? '';

        // Verificar si se ha ingresado un destino
        if (!empty($destino)) {
            // Generar las ciudades aleatorias
            $ciudades = array(
                "Barcelona" => array("nombre" => "Ciudad 1", "precio" => rand(100, 500)),
                "París" => array("nombre" => "Ciudad 2", "precio" => rand(100, 500)),
                "Londres" => array("nombre" => "Ciudad 3", "precio" => rand(100, 500)),
                "Roma" => array("nombre" => "Ciudad 4", "precio" => rand(100, 500)),
                "Nueva York" => array("nombre" => "Ciudad 5", "precio" => rand(100, 500)),
                "Tokio" => array("nombre" => "Ciudad 6", "precio" => rand(100, 500)),
            );

            // Filtrar las ciudades según el destino ingresado
            $ciudadesFiltradas = array_filter($ciudades, function ($ciudad) use ($destino) {
                return stripos($ciudad, $destino) !== false;
            });

            // Mostrar las cajas de ciudades
            foreach ($ciudadesFiltradas as $ciudad => $detalles) {
                echo '<div class="caja">';
                echo '<h2>' . $ciudad . '</h2>';
                echo '<p>Nombre: ' . $detalles['nombre'] . '</p>';
                echo '<p>Precio: ' . $detalles['precio'] . ' USD</p>';
                echo '</div>';
            }
        }
    ?>

</body>
</html>
