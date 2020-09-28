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

echo "<h2> Tabela PRACOWNICY </h2><br><br>";

if(isset($_GET["number"])){
    $d="Delete from pracownicy where id_pracownik = ".$_GET['number'];
    mysqli_query($p, $d);
}

$zapytanie = "SELECT * FROM pracownicy";
$wynik =  mysqli_query($p, $zapytanie);
if($wynik){
    echo "<table border = \"1\" width=\"50%\" >\n";
    echo "  <tr><th>imie</th><th>nazwisko</th><th>funkcja</th><th>urlop</th></tr>";
while($rekord=mysqli_fetch_array($wynik)){

    echo "<tr>";
    for($i = 1; $i <= 4; $i++){
      
        echo "  <td>" . $rekord[$i]. "</td>\n";
    }
    echo "<td><a href='?number=$rekord[0]'>Usun</a></td>";
    
    echo "<td><a href='edytuj3.php?id=$rekord[0]'>Edytuj</a></td></tr>";
    
    
}
    echo "</table>";
}

echo "<br><h3> Dodaj nowego pracownika </h3>";


echo "<br><form action='add3.php' method='post'>";
echo  "Imie: <br><input type='text' name='imie' id='imie' required /><br>";
echo "Nazwisko: <br> <input type='text' name='nazwisko' id='nazwisko' required/><br>";
echo "Funkcja: <br> <input type='text' name='funkcja' id='funkcja' required /><br>";
echo "Urlop[TAK/NIE]: <br> <input type='text' name='urlop' id='urlop' required/><br>";


echo "<br><input type='submit' value'='wyslij' />";
echo  "</form>";






mysqli_close($p);



?>