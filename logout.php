<?php
session_start();

if(isset($_SESSION["login"])){
    
}else{
    header("Location:index.php");
}
    

?>



<?php 
    session_start();
    session_destroy();
    header("Location:login.php");
        
?>
