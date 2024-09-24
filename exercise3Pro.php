<?php
/**
        * Celcius to Fahrenheit
        * @param $celsius the grades in celsius
        * @return float the grades in Fahrenheit

    *function toFahrenheit(float $celsius): float {
    *    return ($celsius * 9 / 5) + 32;
    *}


    *$fahrenheit = toFahrenheit(32.6);

    *printf("Celsius to Fahrenheit = %.2f \n", $fahrenheit);
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión Celsius a Fahrenheit</title>
</head>
<body>
    <h1>Conversión de Celsius a Fahrenheit</h1>

    <form method="post" action="">
        <label for="celsius">Introduce la temperatura en grados Celsius:</label>
        <input type="text" id="celsius" name="celsius">
        <input type="submit" value="Convertir">
    </form>

    <?php
    /**
     * Celcius to Fahrenheit
     * @param $celsius the grades in celsius
     * @return float the grades in Fahrenheit
     */
    function toFahrenheit(float $celsius): float {
        return ($celsius * 9 / 5) + 32;
    }

    // Verificar si el formulario ha sido enviado y que el valor no esté vacío
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['celsius'])) {
        $input = $_POST['celsius'];

        // Verificar que el valor introducido es numérico
        if (is_numeric($input)) {
            // Convertir a float
            $celsius = (float)$input;

            // Llamar a la función para convertir a Fahrenheit
            $fahrenheit = toFahrenheit($celsius);

            // Mostrar el resultado con 2 decimales
            printf("<p>Celsius a Fahrenheit = %.2f</p>", $fahrenheit);
        } else {
            echo "<p>Por favor, introduce un valor numérico válido.</p>";
        }
    }
    ?>
</body>
</html>
