<?php 
	$i = 1;
	for($i;$i <= 5;$i++){
		$num = $i;
		for($num;$num < 5;$num++){
			echo '/';
		}
		if($i != 5){
		for($j = 1;$j <= (2*$i-1);$j++){
			if((($j == 1) || ($j == 2*$i-1))){
				echo "*";
			}else{
				echo "/";
			}	
		}
		}else{
			for($j = 1;$j <= (2*$i-1);$j++){
				echo "*";
			}
		}
		echo "<br />";
	}
 ?>