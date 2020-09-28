
<?php
$p=mysqli_connect("localhost", "root", "", "warsztat") or die ("Nie można połączyć");
$id=$_GET['id'];

    
    $sql = "SELECT imie, nazwisko, funkcja, urlop FROM pracownicy where id_pracownik='$id'";
$result = mysqli_query($p, $sql);
$row = mysqli_fetch_assoc($result);




?>
<form action="" method="post">

    <input type="text" name="imie" placeholder="Imie" required value="<?php echo $row['imie']; ?>">
    <input type="text" name="nazwisko" placeholder="Nazwisko" required value="<?php echo $row['nazwisko']; ?>">
    <input type="text" name="funkcja" placeholder="funkcja" required value="<?php echo $row['funkcja']; ?>">
     <input type="text" name="urlop" placeholder="urlop" required value="<?php echo $row['urlop']; ?>">
    <input type="submit" value="Zmień" name="wyslij">
</form>


<?php

    if(isset($_POST['wyslij'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $funkcja=$_POST['funkcja'];
    $urlop=$_POST['urlop'];

   
    
        

    $sql = "UPDATE pracownicy SET imie='$imie', nazwisko='$nazwisko', funkcja='$funkcja', urlop='$urlop' WHERE id_pracownik='$id'";

    if (mysqli_query($p, $sql)) {
    header('Location:pracownicy.php');
} else {
    echo "Error updating record: " . mysqli_error($p);
}
    }


mysqli_close($p);

?>
