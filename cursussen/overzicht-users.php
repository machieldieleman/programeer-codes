<?php include 'header.php'?>


<html>
<head>
    <title>Overzicht users</title>
</head>
<body>

<h2>Overzicht gebruikers</h2>

<?php

$conn = mysqli_connect('localhost','root','','cursussen');

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    echo $row['id']." | ";
    echo $row['username']." | ";
    echo $row['password']." | ";
    echo $row['full_name']." | <a href='user-edit.php?id=".$row['id']."'>Bewerken</a><br />";

}

?>

</body>
</html>