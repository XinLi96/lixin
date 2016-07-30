<table border="1" align="center" cellpadding="1" cellspacing="1">
<?php 
	for($i = 9;$i > 0;$i--){
		echo '<tr>';
		$j = $i-1;
		for($j;$j < 9;$j++ ){
			echo '<td></td>';	
		}
		for($j = 1;$j <= $i;$j++){
			echo '<td>'.$i.' * '.$j.' = '.($i*$j).' '.'</td>';
		}
		echo '</tr>';
	}
 ?>
 </table>