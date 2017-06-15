<!-- when the properties and method of parent class are accesed by a child class we call that inheritance.

if the child class inherit the parent class and implement its own mehtod this concept is called overridden method.   

Types of inheritance:
1-> Single level inheritance : in this child class inherit all properties and behavior of parent class
2-> Multilevel inheritance
-->

<?php 
class User_inherit {

	public function printItem($string)
	{
		echo "Hi : ".$string;
	}

	public function printPhp()
	{
		echo "I am value bound".PHP_EOL;
	}
}


class Leader extends User_inherit
{

	public function printItem($string)
	{
		echo"Hi".$string.PHP_EOL;
	}

	public function printPhp()
	{
		echo "I am from second class";
	}
}

$a = new User_inherit();
$b = new Leader();

$a->printItem("rahul") ;
$a->printPhp();

$b->printItem("ravi");
$b->printPhp();
?>