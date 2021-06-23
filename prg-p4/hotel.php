<?php
include 'header.inc.php';
?>
<?php
$type = $_GET['type'];
$result = mysqli_query($conn, "SELECT * FROM houses WHERE type = '$type'");
while($row = mysqli_fetch_assoc($result)){
    echo '<div class="blok">
            <div class="hotel1">
                <div class="title">'.$row['title'].'</div>
                    <a href="detailpage.php?id='.$row['id'].'">
                    <img class="plaatje-type" src="http://localhost/programeer-codes/prg-p4/images/houses/'. $row['image'].'" />
                    </a>
            </div>
          </div>';
}
?>
