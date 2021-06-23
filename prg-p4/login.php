<?php
    include 'header.inc.php';
?>
<?php

if($_POST) { 
    $loginnaam = $_POST['loginnaam'];
    $wachtwoord = hash('sha256', $_POST['wachtwoord']);
    
    if (empty($loginnaam) or empty($wachtwoord)) {
        $melding = 'vul beide velden in!';
    }  else {
        
        $sql="select * from users where username = '$loginnaam' and password = '$wachtwoord'";
        $result = mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($result) == 1){
                $_SESSION['user'] = mysqli_fetch_assoc($result);
                header('Location: booking.php');
            }  else {
                $melding = 'verkeerde gebruikersnaam of wachtwoord';
            }
      
    }
    if ($melding) {

        echo '<p style="color:red">'.$melding.'</p>';
    
    }
}
?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <form>
      <input type="text" id="login" class="fadeIn second" name="loginnaam" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="wachtwoord" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>



  </div>
</div>  