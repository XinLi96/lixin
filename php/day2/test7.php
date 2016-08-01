<table border="1" width="600">
<?php  
	if(isset($_GET['sub'])){
		$row = $_GET['row'];
		$col = $_GET['col'];
		$color = '';
		for($i = 0;$i < $row;$i++){
			if($i % 2 == 0){
				$color = 'green';
			}else{
				$color = 'yellow';
			}
			echo '<tr bgColor='. $color .' onmouseover="lrow(this)" onmouseout="lcol(this)">';
			for($j = 0;$j < $col;$j++){
				echo '<td>'.$i.'</td>';
			}
		echo '</tr>';
		}
	}
?>
<script>
	var $baseColor = '';
	function lrow(obj){
		$baseColor = obj.bgColor;
		obj.bgColor = 'red';
	}
	function lcol(obj){
	  obj.bgColor = $baseColor;
	}
</script>
</table><form action="test7.php" method="get" accept-charset="utf-8">
 	输入行：<input type="text" name="row"/><br/>
 	输入列：<input type="text" name="col"/><br/>
 	<input type="submit" name="sub" value="生成表格"/>
</form>