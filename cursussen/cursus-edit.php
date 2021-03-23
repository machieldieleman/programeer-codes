<?php
$sql = "SELECT * FROM cursussen ";
$con = mysqli_connect($host, $user, $password, $db_name);
$result = mysqli_query($con, $sql);
 
if (isset($_GET['id'])){
 $sql = "SELECT * FROM cursussen WHERE id =".$_GET['id'];
 $result = mysqli_query($con, $sql);
 $row = mysqli_fetch_assoc($result);
 
}
if ($_POST){
 
 $sql = "UPDATE cursussen SET
 cursussen = '".$_POST['cursussen']."',
 omschrijving = '".$_POST['omschrijving']."',
 prijs = '".$_POST['prijs']."'
 WHERE id = ".$_POST['id'];
 mysqli_query($con, $sql);
 
 header('location: cursus_inschrijven.php'); 
 
}
 
?>
 
<!DOCTYPE html>
<link rel="stylesheet" href="add_cursus.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
</head>
<body>
 <center>
 
 <div id="header">
 </div>
 <div id="body">
 <div id="content">
 <form method="post">
 <table align="center">
 <tr>
 <td align="center" class="cursus">Cursus bewerken</a><br></br>
 
 </td>
 <br></br>
 
 </tr>
 <tr>
 <td><input type="hidden" class="id" name="id" value="<?php echo $row['id'];?>" /></td>
 </tr>
 <tr>
 <td><input type="text" class="cursussen" name="cursussen" placeholder="Cursus naam" value="<?php echo $row['cursussen'];?>" required /></td>
 </tr>
 <tr>
 <td><input type="text" class="omschrijving" name="omschrijving" placeholder="Omschrijving" value="<?php echo $row['omschrijving'];?>" required /></td>
 <tr>
 <td><input type="number" class="prijs" name="prijs" placeholder="Prijs" value="<?php echo $row['prijs'];?>" required /></td>
 </tr>
 <tr>
 <td><button type="submit" name="save"><strong>Opslaan</strong></button></td>
 </tr>
 <td ><a href="cursus_inschrijven.php">Annuleren</a></td>
 </table>
 </form>
 </div>
 </div>


 
 <?php 
 
 if(isset($_POST['save'])){
 
 $cursussen = $_POST['cursussen'];
 $omschrijving = $_POST['omschrijving'];
 $prijs = $_POST['prijs'];
 mysqli_query($con, "UPDATE cursussen (cursussen, omschrijving, prijs) VALUES ('$cursussen','$omschrijving','$prijs')");
 
 
 
 if(mysqli_query($con, $sql)){
 echo 'De cursus is opgeslagen';
 }
 }
 }


 
 ?>
 
 </center>
</body>