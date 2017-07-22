<?php 
// If the sum of cubes of individual digits of a number is equal to the number itslef  then it is called Armstrong Number.

$number="371";
$temp=$number;
$sum=0;

while($temp !=0)
{
	$remainder=$temp%10;
	$sum = $sum + ($remainder * $remainder * $remainder);
	$temp=$temp/10;
}

if($number==$sum)
{
	echo "Number is Armstrong";
}
else
{
	echo "Number is not Armstrong";
}
?>