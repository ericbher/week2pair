<!DOCTYPE html>
<?php

session_start();

function makeMove(){

}



?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tic Tac Toe</title>

	<!-- ensures proper rendering and touch zooming on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>

	<style>


		table {
			border: 1px solid gray;
			width: 300px;
			height: 300px;
		}

		td {
			border: 1px solid gray;
		}

		.square {
    		width: 100px;  
    		height: 100px;
		}

		h1 {
		font-family: 'Amatic SC', cursive;
		
		}

		input.marker {
			width: 100px;
			height: 100px;
		}
	</style>
</head>
<body>

	<div class="container">
	<div class="jumbotron">
		<h1>tic tac toe </h1>
	</div>

	<!--We need a way to keep track of whose turn it is. Player X should be set to 1. Player O is set to 0. 
	One way we could alternate is using a modulo and switching between the remainder of 1 and 0.  


	There needs to besome way to store which box has been clicked and what symbol has been put in that box using an
	associatve array. -->

	<?php

	$playerx = 1; // Player X is set to 1
	$playero = 0; // Player O is set to 0
	$turn = 0; // Turn counter

	for ($i = 1; $turn < 9; $i++){
		if ($i % 2 == $playerx) {
			echo "<h1>Player X is up.</h1>";
			makeMove();
			$turn ++;	
	} else {
		echo "<h1>Player O is up.</h1>";
		$turn++;
	}
}

	//Creates the tic tac toe board
	echo "<table>";

	for ($i=0; $i<3; $i++){
		echo "<tr>";
		for ($j=0; $j<3; $j++){
			echo "<td>";
			echo "<input type=\"submit\" name=\"$i . $j\" value = \"\" class = \"marker\" >";
			echo "</td>";
		}
	echo "</tr>";



	}

	echo "</table>"

	?>
	
	
	
	</div>
</body>
</html>
