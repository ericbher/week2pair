<!DOCTYPE html>

<?php


if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$select = $_POST['select'];
	$comments = $_POST['comments'];
	

	$cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
	if (!filter_var($cleanEmail, FILTER_VALIDATE_EMAIL)){
		$cleanEmail = '';
	}

	
		


	

	



	



} // end of submit isset
?>














<html>
<title></title>
<head>
	
	<style>

	div {
		background-color: #A7B3C6;
		padding: 10px;
		margin-top: 50px;
		width: 250px;
		border-radius: 4px;

	}


	</style>
</head>
<body>
	<form action="form.php" method="post">
		Name: <input type="text" name="name" value ="<?php echo (isset($_POST['submit'])) ? $name : '' ?>" /> <br><br>
		Email: <input type="text" name="email" value ="<?php echo (isset($_POST['submit'])) ? $cleanEmail : '' ?>" /> <br><br>
		Support Type: <select name = "select">
						<option name = "billing" value="billing">Billing</option>
						<option name ="support" value="support">Support</option>
						<option name ="marketing" value="marketing">Marketing</option>
					</select><br><br>
		Comments: <br /><textarea name = "comments" rows="10" cols="30"></textarea><br><br>
		<input type="submit" value="Send" name="submit" />
	</form>
	

	<?php

	if(isset($_POST['submit'])){

		
		if (!filter_var($cleanEmail, FILTER_VALIDATE_EMAIL)){
			echo "<div>";
			echo "Invalid e-mail. Please try again."; 
			echo "</div>";
		}






   }

	?>

	









</body>
</html>

