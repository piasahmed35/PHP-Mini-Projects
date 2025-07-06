<?php
// Define temperature value and type ('C' for Celsius, 'F' for Fahrenheit)
$temperature = 100;
$type = 'C';  // change to 'F' to convert fahrenheit to celsius

if ($type == 'C') {
    // celsius to fahrenheit
    $converted = ($temperature * 9 / 5) + 32;
    echo "$temperature °C is equal to $converted °F.";
} elseif ($type == 'F') {
    // fahrenheit to celsius
    $converted = ($temperature - 32) * 5 / 9;
    echo "$temperature °F is equal to $converted °C.";
} else {
    echo "Invalid temperature type. Use 'C' for Celsius or 'F' for Fahrenheit.";
}
?>