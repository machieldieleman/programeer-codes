<?php
include "connection.php";
$price = 0;
?>
<html>
<head>
    <link rel='stylesheet' type='text/css' href='css-style.css?time=<?php echo time() ?>'/>
    <title>Het Kruideniertje</title>
    <script src="https://kit.fontawesome.com/8d17560fbd.js" crossorigin="anonymous"></script>
	<?php
	if(!isset($_SESSION["user"])){
		header("Location: inloggen.php");

	}
	if(isset($_GET["barcode"])){
		$barcode=$_GET["barcode"];
		$sql="SELECT * FROM articles WHERE code='$barcode'";
		$result=mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			if(!isset($_SESSION["artikelen"])){
				$_SESSION["artikelen"] = [];

			}
			array_push($_SESSION["artikelen"], $row);

		}
	}

	?>
</head>
<body>
<div class="mainscreen">
<ul>
<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
</div>
<div class="product" style="text-align:center;margin-left:8%;margin-right:45%;padding:1px 16px;">Producten</div>
<div class="container">
<div id="container">
	<form action="">
			<div id="calculator">
				<div id="result">
					<div id="output">
						<input id="barcode" type="text" name="barcode" readonly="true"> 
					</div>
				</div>
				<div id="keyboard">					
					<div class="number center" onclick="addinput(this)">7</div>					
					<div class="number center" onclick="addinput(this)">8</div>
					<div class="number center" onclick="addinput(this)">9</div>				
					<div class="number center" onclick="addinput(this)">4</div>
					<div class="number center" onclick="addinput(this)">5</div>
					<div class="number center" onclick="addinput(this)">6</div>					
					<div class="number center" onclick="addinput(this)">1</div>
					<div class="number center" onclick="addinput(this)">2</div>
					<div class="number center" onclick="addinput(this)">3</div>					
					<div class="empty center" onclick="addinput(this)"></div>
					<div class="number center" onclick="addinput(this)">0</div>
					<input class="number" type="submit" value="go">					
				</div>
			</div>
		</div>
	</form>
	<script src="numblock.js"></script>
</div>
<div class="product-field">
	<?php
	if(isset($_SESSION['artikelen'])){
	foreach($_SESSION['artikelen'] as $product){
		echo '
		<div class="product">
		<table>
			<tr>
				<td>productnaam:</td>
				<td>'.$product['description'].'</td>
			</tr>
			<tr>
				<td>prijs:</td>
				<td>'.$product['price'].'</td>
			</tr>
		</table>
		</div>	
		';
		$price += $product['price'];
	}

}
$_SESSION['price'] = $price;
	?>
		
</div>
<a class="bon" href="bon.php">bon afdrukken</a>
<div class="incl">
<div class="product">
		<table>
			<tr>
				<td>prijs-excl</td>
				<td><?=number_format($price/100*79,2)?></td>
			</tr>
			<tr>
				<td>prijs-incl</td>
				<td><?=number_format($price,2)?></td>
			</tr>
		</table>
		</div>
		</div>


</body>
</html>