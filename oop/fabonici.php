<?php
$first=0;
$second=1;
echo $first.'&nbsp';
echo $second.'&nbsp';

for($i=0;$i<10;$i++)
{
	$third=$first+$second;
	echo $third.'&nbsp';

	$first=$second;
	$second=$third;
}

?>