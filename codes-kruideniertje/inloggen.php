<?php
include 'connection.php';
if (!isset($_SESSION['role'])){
   
}
if(isset($_SESSION["user"])){
    header("Location: index.php");
}

?>
<head>
</head>
<body>
    <?php
    if($_POST){
        $sql= "SELECT * FROM users where username = \"$_POST[username]\" and password = \"$_POST[password]\"";
        $result= mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1){
            $user = mysqli_fetch_array($result);
            $_SESSION["user"] = $user;

            if ($_SESSION ['user'] ['role'] == 'admin'){
            header("Location: adminpanel.php");
            exit();
            }
        else {
            header("Location: index.php");
            exit();
            }
        }
    }
?>
<div class='loginblock'>
    <h2 class = "inlog">Log in </h2>
    <form class='form' role="form" 
    action = "" method = "post">

    <input type="text" class="input" name="username" placeholder="e-mail" required autofocus>
    <br></br>
    <input type="text" class="input" name="password" placeholder="password" required autofocus>
    <br></br>
    <button class="login" type="submit" name="login">login</button>



</div>