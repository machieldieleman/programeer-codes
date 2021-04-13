<html>
<head>
    <link rel='stylesheet' type='text/css' href='css-style.css?time=<?php echo time() ?>'/>
    <title>Het Kruideniertje</title>
    <script src="https://kit.fontawesome.com/8d17560fbd.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="mainscreen">
<ul>
<li><a class="active" href="#home"><i class="fa fa-home"></i></a></li>
<li><a href="#contact"><i class="fas fa-user-circle"></i></a></li>
<li><a href="#news"><i class="fas fa-info-circle"></i></a></li>
<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
</div>
<div class="product" style="text-align:center;margin-left:8%;margin-right:45%;padding:1px 16px;">Producten</div>
<div class="container">
<div id="container">
			<div id="calculator">
				<div id="result">
					<div id="history">
						<p id="history-value"></p>
					</div>
					<div id="output">
						<p id="output-value"></p>
					</div>
				</div>
				<div id="keyboard">
					<button class="operator" id="clear">C</button>
					<button class="operator" id="backspace">CE</button>
					<button class="operator" id="%">%</button>
					<button class="operator" id="/">&#247;</button>
					<button class="number" id="7">7</button>
					<button class="number" id="8">8</button>
					<button class="number" id="9">9</button>
					<button class="operator" id="*">&times;</button>
					<button class="number" id="4">4</button>
					<button class="number" id="5">5</button>
					<button class="number" id="6">6</button>
					<button class="operator" id="-">-</button>
					<button class="number" id="1">1</button>
					<button class="number" id="2">2</button>
					<button class="number" id="3">3</button>
					<button class="operator" id="+">+</button>
					<button class="empty" id="empty"></button>
					<button class="number" id="0">0</button>
					<button class="empty" id="empty"></button>
					<button class="operator" id="=">=</button>
				</div>
			</div>
		</div>
		<script src="numblock.js"></script>
</div>
</body>