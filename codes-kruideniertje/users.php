<?php
include "connection.php";
if(!isset($_SESSION['user'])){
    header("Location: inloggen.php");
}
else{
    if($_SESSION['user']['role'] == 'admin'){
    }
    else{
        header('Location: index.php');
    }
}
if(isset($_POST['add-user'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $real_name = $_POST['real_name'];
    $role = $_POST['role'];
    if(empty($username)||empty($password)||empty($real_name)||empty($role)){
      }
    else{
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            
        }
        else{
            $sql = "INSERT INTO users (username, name, password, role) VALUES ('$username', '$real_name', '$password', '$role')";
            mysqli_query($conn, $sql);
        }
    }

}
else if(isset($_POST['delete-user'])){
    $id = $_POST['remove_id'];
    $sql = "DELETE FROM users WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: users.php");
}


?>
<html>
<head>
    <title>Userpanel</title>
    <link rel='stylesheet' type='text/css' href='css-style.css?time=<?php echo time() ?>'/> 
    <script src="https://kit.fontawesome.com/8d17560fbd.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Userpanel<h1>
<div class="mainscreen">
<ul>
<li><a class="active" href="adminpanel.php"><i class="fa fa-home"></i></a></li>
<li><a href="users.php"><i class="fas fa-user-circle"></i></a></li>
<li><a href="index.php"><i class="fas fa-info-circle"></i></a></li>
<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
</div>
<form method="POST" action="" class="user">
<label>username</label><input type="text" name='username'><br>
<label>password</label><input type="password" name="password"><br>
<label>real-name</label><input type="text" name="real_name"><br>
<label>role</label><select name="role"><option value="admin">admin</option><option value="cashier">cashier</option></select>
<input type="submit" name="add-user">
</form>
<form class="delete" method='POST'>
<select name='remove_id'>
<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row["id"] . "'>" . $row["username"] . "</option>";       
    }
?>
</select><br><br>
<input type='submit' name='delete-user' value="Verwijderen"/>
</form>
</body>
</html>