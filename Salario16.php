<?php
$Nombre = $_POST['Nombre'];
$Horas = $_POST['Horas'];
$Pago = $_POST['Pago'];

$Salario = ($Horas * $Pago);
echo "Este es su salario total:" . $Salario;
?>