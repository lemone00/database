<?php
session_start();
$a = mysqli_connect ('localhost','root','','warsztat') or die ("Nie można połaczyć się z MySql");
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];

$zap = "INSERT INTO `klienci` (`imie`, `nazwisko`) VALUES ('$imie', '$nazwisko');";

echo "<h2>Wpis został dodany!</h2>";



mysqli_query( $a, $zap);
mysqli_close($a);
header("Location: tabelatablica.php");
?>