<table border="1" align="center" cellpadding="1" cellspacing="1">
<?php 
	for($i = 1;$i <= 9;$i++){
		$j = 9 - $i;
		echo '<tr>';
		for($j;$j > 0;$j--){
			echo '<td></td>';
		}
		for($n = 1;$n <= $i;$n++){
			echo '<td>'.$i.' * '.$n.' = '.($i*$n).' '.'</td>';
		}
		echo '</tr>';
	}
 ?>
 </table>