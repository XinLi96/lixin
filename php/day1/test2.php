<?php 
	$i = 0;
	do{
		$j = 1;
		$i++;
		do{
			echo $i.' * '.$j.' = '.($i*$j).' ';
			$j++;
		}while($j <= $i);
		echo '<br/>';
	}while($i <= 8)
 ?>