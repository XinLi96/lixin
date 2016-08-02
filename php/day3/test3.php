<?php
	$flag = true; 
	$date = array(
		'date1' => array('03-19','自己的生日'),
		'date2' => array('06-01','六一儿童节'),
		'date3' => array('05-01','五一劳动节'),
 	);
	if(isset($_GET['sub'])){
		$now = $_GET['date'];
		// echo $now;
		foreach ($date as $v) {
			if($now == $v[0]){
				echo $v[0].'备忘：'.$v[1];
				$flag = FALSE;
			}
		}	
		if($flag){
				echo '无备忘录';
			}	
	}
	
?>
<form action="test3.php" method="get" accept-charset="utf-8">
  	<caption><h3>单击查询日程</h3></caption>
  	输入查询日期（如：03-06）：<input type="text" name="date"/>
  	<input type="submit" name="sub" value="查询"/>
</form>