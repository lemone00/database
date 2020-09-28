





<?php
$p=mysqli_connect("localhost", "root", "", "warsztat") or die ("Nie można połączyć");
$id=$_GET['id_klient'];

    
    $sql = "SELECT imie, nazwisko FROM klienci where id_klient='$id'";
$result = mysqli_query($p, $sql);
$row = mysqli_fetch_assoc($result);




?>
<form action="" method="post">

    <input type="text" name="imie" placeholder="Imię" required value="<?php echo $row['imie']; ?>">
    <input type="text" name="nazwisko" placeholder="Nazwisko" required value="<?php echo $row['nazwisko']; ?>">
    <input type="submit" value="Zmień" name="wyslij">
</form>


<?php

    if(isset($_POST['wyslij'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
   
    
        

    $sql = "UPDATE klienci SET imie='$imie',nazwisko='$nazwisko'WHERE id_klient='$id'";

    if (mysqli_query($p, $sql)) {
    header('Location:tabelatablica.php');
} else {
    echo "Error updating record: " . mysqli_error($p);
}
    }


mysqli_close($p);

?>