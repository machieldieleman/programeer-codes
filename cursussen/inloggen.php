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

        $user = 'Machiel';
        $password = '123';

        $loginnaam = $_POST['loginnaam'];
        $wachwoord = $_POST['wachtwoord'];

        if (empty($loginnaam) or empty($wachwoord)) {
            $melding = 'vul beide velden in!';
        }  else {
                if ($loginnaam == $user && $wachwoord == $password) {
                    header('Location: index.php?ingelogd');
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