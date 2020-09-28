<?php
session_start();
$a = mysqli_connect ('localhost','root','','warsztat') or die ("Nie można połaczyć się z MySql");
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$funkcja = $_POST['funkcja'];
$urlop = $_POST['urlop'];

$zap = "INSERT INTO `pracownicy` (`imie`, `nazwisko`, `funkcja`,`urlop`) VALUES ('$imie', '$nazwisko', '$funkcja', '$urlop');";

echo "<h2>Wpis został dodany!</h2>";



mysqli_query( $a, $zap);

mysqli_close($a);
header("Location: pracownicy.php");
?>