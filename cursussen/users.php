<html>
<head>
    <title>Overzicht users</title>
</head>
<body>
<h1>Overzicht gebruikers</h1>

<?php

$conn = mysqli_connect('localhost','root','','cursussen');

if ($_POST){
        $loginnaam = $_POST['loginnaam'];
        $wachtwoord = $_POST['wachtwoord'];
    $sql = "INSERT INTO users SET
        username = '".$_POST['username']."',
        password = '".$_POST['password']."',
        full_name = '".$_POST['full_name']."'";
    mysqli_query($conn, $sql);
}
$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);

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
<input type="text" name="full_name">

</body>

</html>