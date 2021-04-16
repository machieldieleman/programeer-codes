<?php
include "connection.php";
if($_POST){
    $id = $_POST['remove_id'];
    $sql = "DELETE FROM articles WHERE id='$id'";
    mysqli_query($conn, $sql);
    #header('Location: adminpanel.php');
}

?>
<html>
<head>
    <title>Adminpanel</title>
    <link rel='stylesheet' type='text/css' href='css-style.css?time=<?php echo time() ?>'/> 
    <script src="https://kit.fontawesome.com/8d17560fbd.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Adminpanel</h1>
    <div class="product" style="text-align:center;margin-left:40%;margin-right:45%;padding:1px 16px;">Producten bijschrijven</div>
<div class="mainscreen">
<ul>
<li><a class="active" href="adminpanel.php"><i class="fa fa-home"></i></a></li>
<li><a href="users.php"><i class="fas fa-user-circle"></i></a></li>
<li><a href="index.php"><i class="fas fa-info-circle"></i></a></li>
<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
<li><a href="camera.php"><i class="fas fa-camera"></i></a></li>
</div>
</div>
<div class="product-erbij">
	
	<?php
    $sql = "SELECT * FROM articles";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo '
            <div class="product">
		<table>
			<tr>
				<td>productnaam</td>
				<td>'.$row['description'].'</td>
			</tr>
			<tr>
				<td>prijs:</td>
				<td>'.$row['price'].'</td>
			</tr>
            <tr>
                <td>stock</td>
                <td>'.$row['stock'].'</td>
            </tr>
		</table>
		</div> 
            ';
        }
    }
    ?>
			
</div>
<form class="add" method='POST' action="add-product.php">
    <label>code</label><input type="number" name="code"><br>
    <label>description</label><input type="text" name="description"><br>
    <label>supplier</label><input type="text" name="supplier"><br>
    <label>unit</label><input type="text" name="unit"><br>    
    <label>price</label><input type="number" name="price"><br>
    <label>stock</label><input type="number" name="stock"><br>
    <label>group</label><select name="group">
<?php
    $sql = "SELECT * FROM `group`";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
       
    }
?>
</select><br>
<input type="submit" value='toevoegen'>
</form>
<form class="delete" method='POST'>
<select name='remove_id'>
<?php
    $sql = "SELECT * FROM `articles`";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row["id"] . "'>" . $row["description"] . "</option>";       
    }
?>
</select><br><br>
<input type='submit' name='remove' value="Verwijderen"/>
</form>
</body>
</html>