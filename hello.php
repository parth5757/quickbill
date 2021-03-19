<?php
	$a=1;
	$b=2;
	$c=3;
	if(($a>$b) && ($b>$c))
		echo "$a";
	else
	{
		if(($b>$a) && ($b>$c))
			echo "$b";
		else
		{
			echo "$c";
		}
	}
?>
