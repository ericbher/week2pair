<!DOCTYPE html>
<?php

session_start();



if(isset($_POST['play'])){
	
	$symbol = $_POST['marker'];
 	$position = $_POST['position'];

$_SESSION['symbol'] = $symbol;
$_SESSION['position'] = $position;

}







?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tic Tac Toe</title>

	

	<link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>

	<style>


		table {
			border: 1px solid gray;
			width: 300px;
			height: 300px;
		}

		td {
			border: 1px solid gray;
			width: 100px;
			height: 100px;
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

		p{
			text-align: center;
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

	/*for ($i = 1; $turn < 9; $i++){
		if ($i % 2 == $playerx) {
			echo "<h1>Player X is up.</h1>";
			makeMove();
			$turn ++;	
	} else {
		echo "<h1>Player O is up.</h1>";
		$turn++;
	}
}*/

?>

<table>
	<tr>
		<td>
			<p>
			<?php

			if(isset($_POST['play'])){

				if ($symbol === "x" && $position === "a1"){
					echo "X"; 
				} elseif ($symbol === "o" && $position === "a1"){
					echo "O"; 
				}
			} 


			?>
			</p>
		</td>
		<td>
			<p>
			<?php

			if(isset($_POST['play'])){

				if ($symbol === "x" && $position === "a2"){
					echo "X"; 
				} elseif ($symbol === "o" && $position === "a2"){
					echo "O"; 
				}
			} 


			?>
			</p>
		</td>
		<td>
			<p>
			<?php

			if(isset($_POST['play'])){

				if ($symbol === "x" && $position === "a3"){
					echo "X"; 
				} elseif ($symbol === "o" && $position === "a3"){
					echo "O"; 
				}
			} 


			?>
			</p>
			
		</td>
	</tr>
	<tr>
		<td>
			<p>
			<?php

			if(isset($_POST['play'])){

				if ($symbol === "x" && $position === "b1"){
					echo "X"; 
				} elseif ($symbol === "o" && $position === "b1"){
					echo "O"; 
				}
			} 


			?>
			</p>
		</td>
		<td>
			<p>
			<?php

			if(isset($_POST['play'])){

				if ($symbol === "x" && $position === "b2"){
					echo "X"; 
				} elseif ($symbol === "o" && $position === "b2"){
					echo "O"; 
				}
			} 


			?>
			</p>
		</td>
		<td>
			<p>
			<?php

			if(isset($_POST['play'])){

				if ($symbol === "x" && $position === "b3"){
					echo "X"; 
				} elseif ($symbol === "o" && $position === "b3"){
					echo "O"; 
				}
			} 


			?>
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>
			<?php

			if(isset($_POST['play'])){

				if ($symbol === "x" && $position === "c1"){
					echo "X"; 
				} elseif ($symbol === "o" && $position === "c1"){
					echo "O"; 
				}
			} 


			?>
			</p>
		</td>
		<td>
			<p>
			<?php

			if(isset($_POST['play'])){

				if ($symbol === "x" && $position === "c2"){
					echo "X"; 
				} elseif ($symbol === "o" && $position === "c2"){
					echo "O"; 
				}
			} 


			?>
			</p>
		</td>
		<td>
			<p>
			<?php

			if(isset($_POST['play'])){

				if ($symbol === "x" && $position === "c3"){
					echo "X"; 
				} elseif ($symbol === "o" && $position === "c3"){
					echo "O"; 
				}
			} 


			?>
			</p>
		</td>
	</tr>
</table>
	
	

	

	<form action="tictactoe.php" method="post">
	Choose your symbol:<br />
	<input type="radio" name="marker" value="x"> X
	<input type="radio" name="marker" value="o"> O<br /><br />

	Choose your location:
	<select id = "position" name = "position">
  	<option value="a1">Top Left</option>
  	<option value="a2">Top Center</option>
  	<option value="a3">Top Right</option>
  	<option value="b1">Middle Left</option>
  	<option value="b2">Middle Center</option>
  	<option value="b3">Middle Right</option>
  	<option value="c1">Bottom Left</option>
  	<option value="c2">Bottom Center</option>
  	<option value="c3">Bottom Right</option>
	</select>

	<input type="submit" value = "Play Choice" name = 'play' />


	</form>



	<?php



	?>
	
	
	
	</div>
</body>
</html>
