<?php
require '../src/tictactoe.php';

?>
<html>
<head>
	<title>Tic Tac Toe</title>
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<img src="Tic-Tac-Toe-Pro.jpg" alt="banner" style="width:1000px;height:300px;">
	<div style="margin:0 auto;width:75%;text-align:center;">
	<form name = "ticktactoe" method = "post" action = "index.php">
		<?php
require '../src/board.php';
		?>
	</form>
	</div>
</body>
</html>
