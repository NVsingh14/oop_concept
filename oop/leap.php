<?php 
if(isset($_POST['sumit']))
	$year = $_POST['year'];

if($year%4==0)
{
echo "year is leap year";
}
else
{
	echo "year is not a leap";

}

{

}
?> 
<html>
<head>
 <title>Leap Year</title>
 </head>
 <body>
 <table>
 <form name="frm" method="post" action="">
    <tr><td>Enter the year:</td><td><input type="text" name="year" /></td></tr>
    <tr><td></td>        <td><input type="submit" name="submit" value="submit" /></td>
    <td><center><span> 
     <?php
                     if(isset($_POST['submit'])){   
                        echo $leap;      }  
     
     ?>   
           </span></center></td></tr>
 </form>
 </table>
</body>
</html>