<?php

$conn = mysqli_connect('localhost','root','','cursussen');

if ($_POST){
    $sql = "INSERT INTO users SET
        username = '".$_POST['username']."',
        password = '".$_POST['password']."',
        full_name = '".$_POST['full_name']."'";
if (!mysqli_query($conn, $sql)){
    echo "niet gelukt ".mysqli_error($conn);
}
}
?>


<form action="" method="post">
<input type="text" name="username" value=""/>username<br />
<input type="password" name="password" value=""/>ww<br />
<input type="text" name="full_name">full name
<input type="submit" class="fadeIn fourth" value="add new user">
</form>
