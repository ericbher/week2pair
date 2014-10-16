<?php
session_start();
$submit = $_POST['submit'];
if (isset($submit)){



$name = $_POST["name"];
$_SESSION["name"] = $name


$email = $_POST["email"];
$emailvalid = filter_var("$email" , FILTER_VALIDATE_EMAIL);
if($emailvalid != true){
	echo "Invalid email.  Please re-enter."
}


$comments = $_POST["comments"];
$_SESSION["comments"] = $comments




//The support type I'm not too sure about.  I want it to keep its value but I'm not sure where to put the POST
/*$supporttype = function(){
	if ($supporttype = "billing"){
		echo "<option value ="billing">;
	};
	else if ($supporttype = "support"){
		echo "<option value = "support">;
			else echo "<option value = marketing>";
	}

	
};*/



if(isset($submit)){

}
echo "<input value= $name>";
echo "<input value= $email>";
echo "<input value= $comments>";

}