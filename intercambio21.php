<?php
$dolares = $_POST['dolares'];

$euros = $dolares * 0.92;

echo "Monto ingresado: $" . $dolares . " USD.<br>";
echo "<strong>El equivalente es: €" . $euros . " Euros.</strong>";
?>