<?php
session_start();

if(isset($_SESSION["login"])){
    
}else{
    header("Location:login.php");
}
    



?>

<style>
        *{
            margin: 0;
            font-family: 'Arial';
        }
        body{
            text-align: center;
            background-color: #99ccff;
        }
        h2{
            background-color: #000066;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 30px;
        }
        h3{
            background-color: #000066;
            color: white;
            padding: 20px;
            font-size: 15px;
         }
        
       
        
        
    </style>


<?php


$p=mysqli_connect ('localhost','root','','warsztat') or die ("Nie można połaczyć się z MySql");

echo "<h2> Tabela NARZĘDZIA </h2><br><br>";

if(isset($_GET["number"])){
    $d="Delete from narzedzia where id_narzedzie = ".$_GET['number'];
    mysqli_query($p, $d);
}

$zapytanie = "SELECT * FROM narzedzia";
$wynik =  mysqli_query($p, $zapytanie);
if($wynik){
    echo "<table border = \"1\" width=\"50%\" >\n";
    echo "  <tr><th>nazwa</th><th>rok</th><th>sprawnosc</th></tr>";
while($rekord=mysqli_fetch_array($wynik)){

    echo "<tr>";
    for($i = 1; $i <= 3; $i++){
        
        echo "  <td>" . $rekord[$i]. "</td>\n";
    }
    echo "<td><a href='?number=$rekord[0]'>Usun</a></td>";
    
    echo "<td><a href='edytuj2.php?id=$rekord[0]'>Edytuj</a></td></tr>";
    
    
}
    echo "</table>";
}


echo "<br><h3> Dodaj nowe narzędzie </h3>";

echo "<br><form action='add2.php' method='post'>";
echo  "Nazwa: <br><input type='text' name='nazwa' id='nazwa' required/><br>";
echo "Rok: <br> <input type='text' name='rok' id='rok' required /><br>";
echo "Sprawność: <br> <input type='text' name='sprawnosc' id='sprawnosc' required/><br>";

echo "<br><input type='submit' value'='wyslij' />";
echo  "</form>";






mysqli_close($p);

/*mysqli_close($con);*/

?>