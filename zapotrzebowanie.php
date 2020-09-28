<?php
session_start();

if(isset($_SESSION["login"])){
    
}else{
    header("Location:login.php");
}
    



?>


<?php



$p=mysqli_connect ('localhost','root','','warsztat') or die ("Nie można połaczyć się z MySql");

if(isset($_GET["number"])){
    $d="Delete from zapotrzebowanie where id_zap = ".$_GET['number'];
    mysqli_query($p, $d);
}

$zapytanie = "SELECT * FROM zapotrzebowanie";
$wynik =  mysqli_query($p, $zapytanie);
if($wynik){
    echo "<table border = \"1\" width=\"50%\" >\n";
    echo "  <tr><th>oleje</th><th>czesci</th><th>narzedzia</th><th>czysciwo</th></tr>";
while($rekord=mysqli_fetch_array($wynik)){

    echo "<tr>";
    for($i = 1; $i <= 4; $i++){
        
        echo "  <td>" . $rekord[$i]. "</td>\n";
    }
    echo "<td><a href='?number=$rekord[0]'>Usun</a></td>";
    
    echo "<td><a href='edytuj5.php?id=$rekord[0]'>Edytuj</a></td></tr>";
    
    
}
    echo "</table>";
}




echo "<br><form action='add5.php' method='post'>";
echo  "Oleje: <br><input type='text' name='oleje' id='oleje' required/><br>";
echo "Czesci: <br> <input type='text' name='czesci' id='czesci' required/><br>";
echo "Narzedzia: <br> <input type='text' name='narzedzia' id='narzedzia' required/><br>";
echo "Czysciwo: <br> <input type='text' name='czysciwo' id='czysciwo' required/><br>";


echo "<br><input type='submit' value'='wyslij' />";
echo  "</form>";






mysqli_close($p);



?>