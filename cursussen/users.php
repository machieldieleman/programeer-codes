<html>
<head>
    <title>Overzicht users</title>
</head>
<body>
<h1>Overzicht gebruikers</h1>

<?php

$conn = mysqli_connect('localhost','root','','cursussen');

if ($_POST){
    
    if($_POST) { 
        $loginnaam = $_POST['loginnaam'];
        $wachtwoord = $_POST['wachtwoord'];
    $sql = "INSERT INTO users SET
        username = '".$_POST['username']."',
        password = '".$_POST['password']."',
        name = '".$_POST['name']."'";
    mysqli_query($conn, $sql);

}

$result = mysqli_query($conn, $sql);
    username = '".$'

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id']."";
    echo $row['username']."";
    echo $row['password']."";
    echo $row['full_name']."<br />";

}
?>
<form action="" methode="post">
<input type="text" name="username" value=""/><br />
<input type="password" name="password" value=""/><br />
<input type="text" name="name">

</body>




</html>