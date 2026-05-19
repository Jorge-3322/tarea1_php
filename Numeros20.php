<?php
$numero = $_POST['numero'];

$suma_total = 0;

for ($i = 1; $i <= $numero; $i++) {
    $suma_total = $suma_total + $i;
}

echo "El número límite ingresado es: " . $numero . "<br>";
echo "<strong>La suma de todos los números desde 1 hasta " . $numero . " es: " . $suma_total . "</strong>";
?>