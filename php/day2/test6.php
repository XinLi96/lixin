<caption><h1>计算器</h1></caption>	
<form action="test6.php" method="get" accept-charset="utf-8">
<table border="1" width="600">
<?php 
	$flag = true;
	$num1 = $_GET["num1"];
	$num2 = $_GET["num2"];
	if(is_numeric($num1) && is_numeric($num2)){
		if(isset($_GET["sub"])){
		
		$fuhao = $_GET["fuhao"];
		$sum = 0;
		switch ($fuhao) {
			case '+':
				$sum = $num1 + $num2;
				break;
			case '-':
				$sum = $num1 - $num2;
				break;
			case '*':
				$sum = $num1 * $num2;
				break;
			case '/':
				$sum = $num1 / $num2;
				break;
			case '%':
				$sum = $num1 % $num2;
				break;
			default:
				echo '计算错误';
				break;
		}
	}
	}else{
		$flag = FALSE;
	}

	
	
 ?>
 <tr>
 	<td><input type="text" name="num1" value=<?php echo $_GET["num1"]?$_GET["num1"]:'' ?>></td>
 	<td>
 		<select name="fuhao">
 			<option value="+"<?php echo $fuhao=='+'?"selected=":"" ?>>+</option>
 			<option value="-"<?php echo $fuhao=='-'?"selected=":"" ?>>-</option>
 			<option value="*"<?php echo $fuhao=='*'?"selected=":"" ?>>x</option>
 			<option value="/"<?php echo $fuhao=='/'?"selected=":"" ?>>/</option>
 			<option value="%"<?php echo $fuhao=='%'?"selected=":"" ?>>%</option>
 		<select>
 	</td>
 	<td><input type="text" name="num2" value=<?php echo $_GET["num2"]?$_GET["num2"]:'' ?>></td>
 	<td><input type="submit" name="sub" value="计算"></td>
	 <?php 
 	if(isset($_GET["sub"])){
 		if($flag){
 			echo '<tr><td colspan='.'4'.'>'.'计算结果为：'.$num1.''.$fuhao.''.$num2.' = '.$sum.''.'</td></tr>';	
 		}else{
 			echo '<tr><td colspan='.'4'.'>'.'输入非法，请重新输入'.'</td></tr>';
 		}
 		
 	}
  ?>
 </tr>

</table>
</form>