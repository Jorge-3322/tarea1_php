<?php
$Nombre = $_POST['Nombre'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio_unitario = $_POST['precio_unitario'];

$TOTAL = ($cantidad * $precio_unitario);
echo "El total apagar es:" . $TOTAL;
?>