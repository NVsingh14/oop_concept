<?php 
if(isset($_POST['sub']))
{
	$num = $_POST['num'];
	echo "<h1><center>Table of number: ". $num."</center></h1>";

	for($i=1;$i<=10;$i++)
	{
		echo $num*$i;
		echo "<br/>";
	}
}
?>

<table>
<form name="frm" method="post">
<tr><td>Number</td><td><input type="text" name="num"></td></tr>
<tr><td> </td><td><input type="Submit" value="Submit" name="sub"></td></tr>
</form>
</table>