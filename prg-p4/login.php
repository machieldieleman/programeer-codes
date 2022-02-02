<?php
    include 'header.inc.php';
    if(isset($_SESSION['user'])){
        header("Location: homepage.php");
    }
?>
<?php
if($_POST) { 
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);
    
    if (empty($username) or empty($password)) {
        $melding = 'vul beide velden in!';
    }  else {
        
        $sql= "SELECT * from users where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($result) == 1){
                $_SESSION['user'] = mysqli_fetch_assoc($result);
                header('Location: homepage.php');
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
    <form method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
  </div>
</div>  