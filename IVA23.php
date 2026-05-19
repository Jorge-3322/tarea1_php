<?php
$precio_base = $_POST['precio'];

$total = $precio_base * 1.13;

echo "Precio base: $" . $precio_base . "<br>";
echo "<strong>Total a pagar: $" . $total . "</strong>";
?>