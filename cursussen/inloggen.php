<?php include 'header.php'?>

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
<h2>cursussen</h2>

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
<div class="wrapper fadeInDown">
  <div id="formContent">
    <form>
      <input type="text" id="login" class="fadeIn second" name="loginnaam" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="wachtwoord" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>



  </div>
</div>    
</body>
