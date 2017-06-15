<!-- class is programmer defined data type which include local method and local variable
class is collection of object
class is like a blueprint of a functionality
-->


<?php 
class User {

	public function name() {
		echo "my first class";
	}

	public function desc()
	{
		echo"this is first description";
	}

}


//to create object u have to use new operator

$obj = new User();

$obj->name();
$obj->desc();
?>

