<?php
$celsius = $_POST['celsius'];
$conversion = ($celsius * 9/5) + 32;
echo "su conversión a grados Fahrenheit:" . $conversion;
?>