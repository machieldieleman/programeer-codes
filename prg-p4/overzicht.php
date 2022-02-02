<?php 
    include 'header.inc.php';
?>
<div class="overzicht">overzicht:
<?php
$result = mysqli_query($conn, "SELECT * FROM houses");
while($row = mysqli_fetch_assoc($result)){
    echo '<a href="detailpage.php?id='.$row['id'].'"><div class="details"><img class="plaatje-type" src="http://localhost/programeer-codes/prg-p4/images/houses/'. $row['image'].'" /><div class="title-name">'.$row['title'].'</div></div></a><hr>';
}
?>
</div>