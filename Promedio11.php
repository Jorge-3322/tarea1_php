<?php
$Nota1 = $_POST['Nota1'];
$Nota2 = $_POST['Nota2'];
$Nota3 = $_POST['Nota3'];

$Promedio = ($Nota1 + $Nota2 + $Nota3) / 3;
echo "Su nota es:" . $Promedio;

if ($Promedio > 6) {
    echo "Usted Aprobo"; 
} else {
    echo "Usted Reprobo";
}
?>