<?php
session_start();
$a = mysqli_connect ('localhost','root','','warsztat') or die ("Nie można połaczyć się z MySql");
$marka = $_POST['marka'];
$model = $_POST['model'];
$przebieg = $_POST['przebieg'];
$pojemnosc = $_POST['pojemnosc'];

$zap = "INSERT INTO `samochod` (`marka`, `model`, `przebieg`,`pojemnosc`) VALUES ('$marka', '$model', '$przebieg', '$pojemnosc');";

echo "<h2>Wpis został dodany!</h2>";



mysqli_query( $a, $zap);

mysqli_close($a);
header("Location: samochod.php");
?>