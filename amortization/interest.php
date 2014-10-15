<?php

	
//Grabs the inputs from the form
$principal = $_POST['loan'];
$annualInterest = $_POST['interest'];
$years = $_POST['years'];


//converts years into months
$months = $years * 12;
//converts the annual interest into a decimal point and then divides by 12 for the monthly interest
$monthInterest = ($annualInterest/100)/12;

//Rounds the principal amount to six decimal places for precision in calculations
$beginningAmount = round($principal, 6);

//Creating another variable to store the beginning amount for use in the for loop below
$a = $beginningAmount;



$monthRate = round($monthInterest * $beginningAmount, 6);


$firstMonth = round(($monthInterest/((pow((1 + $monthInterest), $months)) - 1)) * $beginningAmount, 6); 


$monthPayment = round($firstMonth + $monthRate, 6);
 

$toInterest = round($monthPayment - $firstMonth, 6); 



//Creates the table and the column headers
echo "<table>\n";
echo "<tr>\n";
echo "<th scope=\"col\">Month</th>\n";
echo "<th scope=\"col\">Payment</th>\n";
echo "<th scope=\"col\">To Principal</th>\n";
echo "<th scope=\"col\">To Interest</th>\n";
echo "<th scope=\"col\">Balance</th>\n";
echo "</tr>\n";




for ($x = 1; $x <= $months; $x++) {
	echo "<tr>\n";
	echo "<td>$x</td>\n";
	$monthRound = round($monthPayment, 2);
	echo "<td>$monthRound</td>\n"; 
	$beginningAmount = round($beginningAmount-($monthPayment - ($beginningAmount * $monthInterest)), 6);
	$precision = number_format($beginningAmount, 2, '.', '');
	$toInterest = round($a * $monthInterest, 2); //here we're multiplying the beginning Amout by the monthly interest to get the interest payment
	$toPrincipal = round ($monthRound - $toInterest, 2);
	echo "<td>$toPrincipal</td>\n";
	echo "<td>$toInterest</td>\n";
	echo "<td>$precision</td>\n";
	$a = $beginningAmount; //here we reset the $a variable to the beginning Amount
	
	echo "</tr>\n";
}

echo "</table>\n"; 

















