<caption><h3>根据商品上市年份排序</h3></caption>
<?php 
	
	function nx(){
		echo '<table border="1" width="600">';
		echo '<tr>';
			echo '<td>'.'商品顺序'.'</td>';
			echo '<td>'.'商品名称'.'</td>';
		echo '</tr>';
		$arr = array('2012 Macbook Pro','2009 iMac','2011 Macbook Air','2007 iPad1');
 		rsort($arr);
		foreach ($arr as $key => $value) {
			echo '<tr>';
			echo '<td>'.($key+1).'</td>'.'<td>'.$value.'</td>';
			echo '</tr>';
		}
		echo "</table>";
	}
	
	function zx(){
		echo '<table border="1" width="600">';
		echo '<tr>';
			echo '<td>'.'商品顺序'.'</td>';
			echo '<td>'.'商品名称'.'</td>';
		echo '</tr>';
		$arr = array('2012 Macbook Pro','2009 iMac','2011 Macbook Air','2007 iPad1');
 		sort($arr);
		foreach ($arr as $key => $value) {
			echo '<tr>';
			echo '<td>'.($key+1).'</td>'.'<td>'.$value.'</td>';
			echo '</tr>';
		}
		echo "</table>";
	}	 
	if(isset($_GET['sub1'])){
		zx();
	}
	if(isset($_GET['sub2'])){
		nx();
	}
 ?>
 <form action="test7.php" method="get" accept-charset="utf-8">
	<input type="submit" name="sub1" value="正序"/>
	<input type="submit" name="sub2" value="逆序"/>
</form>