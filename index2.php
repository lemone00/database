

<?php
session_start();

if(isset($_SESSION["login"])){

echo "Witaj " .$_SESSION['login'];
    

echo "<br><br><p><a href='logout.php'>Wyloguj</a></p>";
    
}else{
    header("Location:login.php");
}
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Baza</title>
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
        a{
            height: 30px;
            padding: 5px;
            margin: 5px;
            border: 2px solid black;
            background-color: silver;
            border-radius: 15px;
            font-size: 16px;
            text-decoration: none;
            color: black;
            font-weight: 300;
        }
        a:hover{
            background-color: #000066;
            border: 2px solid skyblue;
            color: white;
            
        }
        
    </style>
</head>
<body>
   
   <br> <br> <br>
    <h2>Baza warsztat</h2><br>
    <a href="tabelatablica.php"><b>KLIENCI</b></a>
    <a href="narzedzia.php"><b>NARZEDZIA</b></a>
    <a href="pracownicy.php"><b>PRACOWNICY</b></a>
    <a href="samochod.php"><b>SAMOCHÓD</b></a>
    
    
</body>
</html>