<?php
    
    SESSION_START();
    
?>

<?php
$conn = mysqli_connect('localhost','root','','cursussen');
?>

<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>cursussen</title>
</head>

<body>
<h2>cursussen</h2>
<ul>
    <li><a href='index.php'>home</a></li>
    <li><a href='inloggen.php'>inloggen</a></li>
</ul>
<?php

    if($_POST) { 
        $loginnaam = $_POST['loginnaam'];
        $wachtwoord = $_POST['wachtwoord'];
        
        if (empty($loginnaam) or empty($wachtwoord)) {
            $melding = 'vul beide velden in!';
        }  else {
            
            $sql="select * from users where username = '$loginnaam' and password = '$wachtwoord'";
            $result = mysqli_query($conn, $sql);
            
                if (mysqli_num_rows($result) == 1){
                    $_SESSION['loggedIn'] = $_POST['loginnaam'];
                    header('Location: index.php');
                }  else {
                    $melding = 'verkeerde gebruikersnaam of wachtwoord';
                }
          
        }
        if ($melding) {

            echo '<p style="color:red">'.$melding.'</p>';
        
        }
    }


if (isset($_GET['ingelogd'])) {
    echo'
    <td>
        <a href="index.php?ingelogd&cursus='.$item["cursus"].'">Inschrijven</a>
    </td>';    
}
?>
<form action='' method='post'>
    <table>
        <tr>
            <td>Gebruiker:</td>
            <td><input type='text' name='loginnaam'/></td>
        </tr>
        <tr>
            <td>Wachtwoord:</td>
            <td><input type='password' name='wachtwoord'/></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type='submit' name='submit' value='inloggen'/></td>
        </tr>
    </table> 
</form>      
</body>
<?php
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>