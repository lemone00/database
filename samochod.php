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

echo "<h2> Tabela SAMOCHÓD </h2><br><br>";

if(isset($_GET["number"])){
    $d="Delete from samochod where id_samochod = ".$_GET['number'];
    mysqli_query($p, $d);
}

$zapytanie = "SELECT * FROM samochod";
$wynik =  mysqli_query($p, $zapytanie);
if($wynik){
    echo "<table border = \"1\" width=\"50%\" >\n";
    echo "  <tr><th>marka</th><th>model</th><th>przebieg</th><th>pojemnosc</th></tr>";
while($rekord=mysqli_fetch_array($wynik)){

    echo "<tr>";
    for($i = 1; $i <= 4; $i++){
       
        echo "  <td>" . $rekord[$i]. "</td>\n";
    }
    echo "<td><a href='?number=$rekord[0]'>Usun</a></td>";
    
    echo "<td><a href='edytuj4.php?id=$rekord[0]'>Edytuj</a></td></tr>";
    
    
}
    echo "</table>";
}


echo "<br><h3> Dodaj nowy samochód </h3>";

echo "<br><form action='add4.php' method='post'>";
echo  "Marka: <br><input type='text' name='marka' id='marka' required /><br>";
echo "Model: <br> <input type='text' name='model' id='model' required /><br>";
echo "Przebieg: <br> <input type='text' name='przebieg' id='przebieg' required/><br>";
echo "Pojemnosc: <br> <input type='text' name='pojemnosc' id='pojemnosc' required/><br>";


echo "<br><input type='submit' value'='wyslij' />";
echo  "</form>";






mysqli_close($p);



?>