<?php
	echo "my nsme is $parth";
	$type=gettype($parth);
	settype($parth, integer);
	echo "$type";
	$no=10;
	$type=gettype($no);
	echo "$type";
?>
	<br>
<?php
	settype ($no,"string");
	$type=gettype($no);
	echo "$type";
?>