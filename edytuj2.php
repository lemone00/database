
<?php
$p=mysqli_connect("localhost", "root", "", "warsztat") or die ("Nie można połączyć");
$id=$_GET['id'];

    
    $sql = "SELECT nazwa, rok, sprawnosc FROM narzedzia where id_narzedzie='$id'";
$result = mysqli_query($p, $sql);
$row = mysqli_fetch_assoc($result);




?>
<form action="" method="post">

    <input type="text" name="nazwa" placeholder="Nazwa" required value="<?php echo $row['nazwa']; ?>">
    <input type="text" name="rok" placeholder="Rok" required value="<?php echo $row['rok']; ?>">
    <input type="text" name="sprawnosc" placeholder="Sprawnosc" required value="<?php echo $row['sprawnosc']; ?>">
    <input type="submit" value="Zmień" name="wyslij">
</form>


<?php

    if(isset($_POST['wyslij'])){
    $nazwa=$_POST['nazwa'];
    $rok=$_POST['rok'];
    $sprawnosc=$_POST['sprawnosc'];
   
    
        

    $sql = "UPDATE narzedzia SET nazwa='$nazwa', rok='$rok', sprawnosc='$sprawnosc' WHERE id_narzedzie='$id'";

    if (mysqli_query($p, $sql)) {
    header('Location:narzedzia.php');
} else {
    echo "Error updating record: " . mysqli_error($p);
}
    }


mysqli_close($p);

?>
