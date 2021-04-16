<?php
require('connection.php');
if(!isset($_SESSION["user"]) || !isset($_SESSION["artikelen"])) {
    header("Location: index.php");
    exit();
}
foreach ($_SESSION['artikelen'] as $artikel){
    $id = $artikel['id'];
    $sql = "SELECT stock FROM articles WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $stock = (int) $row['stock'];
    $stock -= 1;
    if($stock < 0) {
        $stock = 0;
    }
    $sql = "UPDATE articles SET stock='$stock' WHERE id='$id'";
}
    mysqli_query($conn, $sql);
?> 

<html>
    <body>
    <?=number_format($_SESSION['price'],2)?>
        <div>
            <?php
            foreach ($_SESSION['artikelen'] as $artikel){
                echo $artikel['description'];
                echo $artikel['price'];
                echo "<br>";
            }
            $_SESSION['artikelen'] = null;
            ?>
        </div>
        <a href="index.php">ga terug naar kassa</a>
       
    </body>
</html>