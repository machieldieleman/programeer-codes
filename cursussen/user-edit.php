<?php include 'header.php'?>


<html>
<head>
    <title>Overzicht users</title>
</head>
<body>

<h2>Overzicht gebruikers</h2>

<?php

$conn = mysqli_connect('localhost','root','','cursussen');

if (isset($_GET['id'])) {

    $sql = "SELECT * FROM users WHERE id = ".$_GET['id'];
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

}

if ($_POST){

    $sql = "UPDATE users SET
        username = '".$_POST['username']."',
        password = '".$_POST['password']."',
        full_name = '".$_POST['full_name']."'
        WHERE id = ".$_POST['id'];

    mysqli_query($conn, $sql);

    header('location: overzicht-users.php');
   
}
echo "<p></p>";


if ($_POST) {
    $conn = mysqli_connect('localhost','root','','trainingen');
    if(!$conn){
        die('Kan niet met de server verbinden!:' .mysql_error());
    }

    $cursus = $_POST['cursus'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];

    $sql = "INSERT INTO cursussen(cursus,omschrijving,prijs) 
     VALUES ('$cursus','$omschrijving','$prijs')";


    if (mysqli_query($conn, $sql)) {
        echo "Toegevoegd!";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: index.php");
}




?>

<p></p>

<h3>Gebruiker wijzigen</h3>
<form action="" method="post">
<input type ="hidden" name="id" value="<?php echo $row['id'];?>"/><br />
Gebruikersnaam: <input type ="text" name="username" value="<?php echo $row['username'];?>"/><br />
Wachtwoord: <input type ="text" name="password" value="<?php echo $row['password'];?>"/><br />
Naam voluit: <input type ="text" name="full_name" value="<?php echo $row['full_name'];?>"/><br /><br />
<input type="submit" name="submit" value="Opslaan"/>

</form>


</body>
</html>