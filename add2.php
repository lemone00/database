<?php
session_start();
$a = mysqli_connect ('localhost','root','','warsztat') or die ("Nie można połaczyć się z MySql");
$nazwa = $_POST['nazwa'];
$rok = $_POST['rok'];
$sprawnosc = $_POST['sprawnosc'];

$zap = "INSERT INTO `narzedzia` (`nazwa`, `rok`,`sprawnosc`) VALUES ('$nazwa', '$rok' ,'$sprawnosc');";

echo "<h2>Wpis został dodany!</h2>";



mysqli_query( $a, $zap);
mysqli_close($a);
header("Location: narzedzia.php");
?>