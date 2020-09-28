<?php
session_start();
$a = mysqli_connect ('localhost','root','','warsztat') or die ("Nie można połaczyć się z MySql");
$oleje = $_POST['oleje'];
$czesci = $_POST['czesci'];
$narzedzia = $_POST['narzedzia'];
$czysciwo = $_POST['czysciwo'];

$zap = "INSERT INTO `zapotrzebowanie` (`oleje`, `czesci`, `narzedzia`,`czysciwo`) VALUES ('$oleje', '$czesci', '$narzedzia', '$czysciwo');";

echo "<h2>Wpis został dodany!</h2>";



mysqli_query( $a, $zap);

mysqli_close($a);
header("Location: zapotrzebowanie.php");
?>