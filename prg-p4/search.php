<?php
include "header.inc.php";
$land = $_GET['land'];
$price = $_GET['price'];
$result = mysqli_query($conn, "SELECT * FROM houses WHERE country = '$land' AND price = '$price'");
while($row = mysqli_fetch_assoc($result)){
    echo $row['title'];  
}
?>
