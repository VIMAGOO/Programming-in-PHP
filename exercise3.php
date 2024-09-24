<?php

/**
 * Convert Celsius to Fahrenheit.
 * 
 * @param float $celsius The temperature in degrees Celsius.
 * @return float The temperature in degrees Fahrenheit.
 */
function toFahrenheit(float $celsius): float {
    return ($celsius * 9 / 5) + 32;
}

// Convert a given Celsius value to Fahrenheit
$fahrenheit = toFahrenheit(32.6);

// Print the result formatted to 2 decimal places
printf("Celsius to Fahrenheit = %.2f \n", $fahrenheit);

?>
