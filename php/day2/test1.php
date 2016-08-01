<?php
	$i = 1;
	//$j = 1;
	while($i <= 9){
		$j = 1;
		while($j <= $i){
			echo $i.' * '.$j.' = '.($i*$j).' ';
			$j++;
		}
		echo '<br/>';
		$i++;
	}
 ?>