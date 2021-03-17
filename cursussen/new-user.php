<html>
<head>
</head>
<body>
<?php
if ($_POST){
$sql = "INSERT INTO users (username, password, full_name)
VALUES ('', '', '')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
</body>
