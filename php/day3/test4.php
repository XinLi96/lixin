<?php
    // $num = 5;
	function c($num){
		for($i = 0;$i < $num;$i++){
		$arr[] = rand(0,9);
	}
	$ran = array_unique($arr);
	if(count($ran) >= 5){
		for($j = 0;$j < 5;$j++){
			echo $ran[$j].'<br/>';
		}
	}else{
		c($num);
	}
	}
	c(5);
?>