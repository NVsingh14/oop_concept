<!-- When object is created we can able to access variable and method that are define in the class  -->



<?php 
class User_obj {
	var $price;
	var $title;

	function set_price($par)
	{
		$this->price=$par;

	}

	function get_price()
	{
		echo $this->price."<br>";
	}


	function set_name($par)
	{
		$this->title=$par;
	}
	function get_name()
	{
		echo $this->title . "<br/>";
	}
}



$samsung= new User_obj();
$apple = new User_obj();
$gionee = new User_obj();


$samsung->set_name("prime");
$apple->set_name("iphone-7");
$gionee->set_name('');
$samsung->set_price("50,000");

$apple->set_price("20,00000");

$samsung->get_name();
$samsung->get_price();
echo"<br>";
$apple->get_name();
$apple->get_price();
?>