<?php

	

$principal = $_POST['loan'];
$annualInterest = $_POST['interest'];
$years = $_POST['years'];

$months = $years * 12;

$monthInterest = ($annualInterest/100)/12;

$monthRate = $monthInterest * $principal;

$firstMonth = round(($monthInterest/((pow((1 + $monthInterest), $months)) - 1)) * $principal, 2); /*to principal, 
first month. this is subtracted from the principal and the result is the remaining balance.*/

$monthPayment = round($firstMonth + $monthRate, 2); // populates first column of table, monthly payment

$toInterest = $monthPayment - $firstMonth; // to interest, this is the interest for the first month.

$balance = $principal - $firstMonth;



echo "<table>\n";
echo "<tr>\n";
echo "<th scope=\"col\">Month</th>\n";
echo "<th scope=\"col\">Payment</th>\n";
echo "<th scope=\"col\">To Principal</th>\n";
echo "<th scope=\"col\">To Interest</th>\n";
echo "<th scope=\"col\">Balance</th>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<td>1</td>\n";
echo "<td>$monthPayment</td>\n";
echo "<td>$firstMonth</td>\n";
echo "<td>$toInterest</td>\n";
echo "<td>$balance</td>\n";
echo "</tr>\n"; 



for ($x = 2; $x <= $months; $x++) {
	echo "<tr>\n";
	echo "<td>$x</td>\n";
	echo "<td>$monthPayment</td>\n"; 
	
	
	echo "</tr>\n";
}

echo "</table>\n"; 





/* At this point you loop through, the remaining balance becomes the $principal - to principle, the
balance is then multiplied by $monthInterest for the next interest payment, the next interest payment is then subtracted
from the $monthPayment which results in the principal payment */




