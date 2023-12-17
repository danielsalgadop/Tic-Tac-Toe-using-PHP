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
			for($i = 0; $i <=8; $i++)
			{
				printf('<input type = "text" id = "ip" name = "box%s" value = "%s">', $i, $box[$i]);
				if ($i == 2 || $i == 5 || $i == 8){
				print("<br>");
				}
			}
			if($winner == 'n')
			{
				print('<input type = "submit" name = "gobtn" value = "Next Move" id = "go">');
			}
			else
			{
				print('<input type = "button" name = "newgamebtn" value = "Play Again" id = "go" onclick = "window.location.href=\'index.php\'">');
			}

		?>
	</form>
	</div>
</body>
</html>
