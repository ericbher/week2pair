<?php
$name = $_POST["name"];
$email = $_POST["email"];
$comments = $_POST["comments"];

//The support type I'm not too sure about.  I want it to keep its value but I'm not sure where to put the POST
$supporttype = function(){
	if ($supporttype = "billing"){
		echo "<option value ="billing">;
	};
	else if ($supporttype = "support"){
		echo "<option value = "support">;
			else echo "<option value = marketing>";
	}

	
};
echo "<input value= $name>";
echo "<input value= $email>";
echo "<input value= $comments>";