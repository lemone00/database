


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    
    <style>
        *{
            margin: 0;
            font-family: 'Arial';
        }
        body{
            text-align: center;
            background-color: #99ccff;
            width: 50%;
            margin: 0 auto;
            
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
            background-color: sandybrown;
            border: 2px solid skyblue;
        }
        h3 {
            clear: both;
            background-color: #000066;
            padding: 10px;
            font-size: 15px;
            color: white;
            
        }
     
    
        
    </style>
    

</head>

<body>
    
    <h2> Zaloguj się do bazy </h2>
    
    <br> <br> 

    <form action="" method="post">

        <label> Login: <input type="text" name="login" required> </label>
        <label> Hasło: <input type="password" name="haslo" required> </label>
        <input type="submit" name="Zaloguj" value="Zaloguj">

    </form>

   
    <br> <br>   
    <h3> Bazę wykonał: Adrian Mikołajczyk </h3>
   
    <?php
    
    session_start();
    if (isset($_POST["Zaloguj"])){
        $login=$_POST["login"];
        $haslo=$_POST["haslo"];
            
    if($login=="admin" && $haslo=="123"){
        $_SESSION["login"]=$login;
        header("Location:index2.php");
    }   else{
            echo "Podales niewlasciwe dane";
    } 
        
        
    }
    
  
    
    ?>


</body>

</html>