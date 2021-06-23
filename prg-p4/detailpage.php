<?php
    include 'header.inc.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM houses where id = '$id'";
    $result = mysqli_query($conn, $sql);
    $house = mysqli_fetch_assoc($result);
?>
<div class='detail'>details:
<div><?=$house['title']?>
</div><div><?=$house['price']?></div>
<div><?=$house['description']?></div>
<img class="plaatje-type"src="images/houses/<?=$house['image']?>"></img>
</div>
