
<?php
$p=mysqli_connect("localhost", "root", "", "warsztat") or die ("Nie można połączyć");
$id=$_GET['id'];

    
    $sql = "SELECT marka, model, przebieg, pojemnosc FROM samochod where id_samochod='$id'";
$result = mysqli_query($p, $sql);
$row = mysqli_fetch_assoc($result);




?>
<form action="" method="post">

    <input type="text" name="marka" placeholder="Marka" required value="<?php echo $row['marka']; ?>">
    <input type="text" name="model" placeholder="Model" required value="<?php echo $row['model']; ?>">
    <input type="text" name="przebieg" placeholder="Przebieg" required value="<?php echo $row['przebieg']; ?>">
     <input type="text" name="pojemnosc" placeholder="Pojemnosc" required value="<?php echo $row['pojemnosc']; ?>">
    <input type="submit" value="Zmień" name="wyslij">
</form>


<?php

    if(isset($_POST['wyslij'])){
    $marka=$_POST['marka'];
    $model=$_POST['model'];
    $przebieg=$_POST['przebieg'];
    $pojemnosc=$_POST['pojemnosc'];

   
    
        

    $sql = "UPDATE samochod SET marka='$marka', model='$model', przebieg='$przebieg', pojemnosc='$pojemnosc' WHERE id_samochod='$id'";

    if (mysqli_query($p, $sql)) {
    header('Location:samochod.php');
} else {
    echo "Error updating record: " . mysqli_error($p);
}
    }


mysqli_close($p);

?>
