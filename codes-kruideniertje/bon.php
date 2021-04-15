<?php
require('include/connection.php');
?>
<html>
    <body>
        <div>
            <?php
            foreach ($_SESSION['artikelen'] as $artikelen){
                echo $artikel['description'];
                echo $artikel['price'];
                echo "<br>"
            }
            ?>
        </div>
    </body>
</html>