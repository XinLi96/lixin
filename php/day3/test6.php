<form action="test6.php" method="get" accept-charset="utf-8">
	<caption><h3>彩票随机生成器</h3></caption>
	<input type="submit" name="sub" value="单击生成新号码"/>
</form>
<?php 
	$title = array('第一注：','第二注：','第三注：','第四注：','第五注：');
	function c($num){
		for($i = 0;$i < $num;$i++){
			$arr[] = rand(0,30);
		}
		$ran = array_unique($arr);
		if(count($ran) >= $num){
			for($j = 0;$j < $num;$j++){
				echo $ran[$j].',';
			}
		}else{
			c($num);
		}
	}
	
	if(isset($_GET['sub'])){
		for($i = 0;$i < 5;$i++){
		echo $title[$i];	
		c(7);
		echo "<br/>";
	}
	}
	
 ?>