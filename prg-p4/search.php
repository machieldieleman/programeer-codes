<?php 
    include 'header.inc.php';
?>
<div class="result">result:<p><p>
<?php
$land = $_GET['land'];
$price = $_GET['price'];
$result = mysqli_query($conn, "SELECT * FROM houses WHERE country = '$land' OR price = '$price'");
while($row = mysqli_fetch_assoc($result)){
    echo '<a href="detailpage.php?id='.$row['id'].'"><div class="details"><img class="plaatje-type" src="http://localhost/programeer-codes/prg-p4/images/houses/'. $row['image'].'" /><div class="title-name">'.$row['title'].'</div></div></a>';
}
?>
</div>