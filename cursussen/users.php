<html>
<head>
    <title>Overzicht users</title>
</head>
<body>
<h1>Overzicht gebruikers</h1>

<?php
$conn = mysqli_connect('localhost','root','','cursussen');
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id']."";
    echo $row['username']."";
    echo $row['password']."";
    echo $row['full_name']."<br />";

}
?>

</body>




</html>