<?php include 'header.php'?>

<?php

if ($_POST) {
    $conn = mysqli_connect('localhost','root','','cursussen');
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