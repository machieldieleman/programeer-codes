<?php
include 'connection.php';
if(!isset($_SESSION['user'])){
    header('Location: inloggen.php');
}
?>
<html>
<head>
    <title>camerameldingen</title>
    <link rel='stylesheet' type='text/css' href='css-style.css?time=<?php echo time() ?>'/> 
    <script src="https://kit.fontawesome.com/8d17560fbd.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>camerameldingen</h1>
    <div class="product" style="text-align:center;margin-left:40%;margin-right:45%;padding:1px 16px;">meldingen</div>
<div class="mainscreen">
<ul>
<li><a class="active" href="adminpanel.php"><i class="fa fa-home"></i></a></li>
<li><a href="users.php"><i class="fas fa-user-circle"></i></a></li>
<li><a href="index.php"><i class="fas fa-info-circle"></i></a></li>
<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
<li><a href="camera.php"><i class="fas fa-camera"></i></a></li>
</div>
<div class="camera">
<?php
$json = file_get_contents("https://martenbiesheuvel.nl/hoornbeeckhelden/security_log.json");
$data = json_decode($json, TRUE);
foreach($data as $item) {
echo '<div class="product">
		<table>
			<tr>
				<td>camera</td>
				<td>'.$item['camera'].'</td>
			</tr>
			<tr>
				<td>tijdstip:</td>
				<td>'.$item['datetime'].'</td>
			</tr>
            <tr>
                <td>bericht</td>
                <td>'.$item['message'].'</td>
            </tr>
		</table>
		</div>';
}
        ?> 
        </div>
</body>
</html>
