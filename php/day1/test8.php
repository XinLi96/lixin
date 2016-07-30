<?php 
	if(isset($_GET['sub'])){
		$num = $_GET['num'];
		if(is_numeric($num)){
			if(($num >= 80) && ($num <= 100)){
				echo '<script>alert("您的成绩为优秀！");</script>';
			}else if(($num >= 60) && ($num < 80)){
				echo '<script>alert("您的成绩为合格！");</script>';
			}else{
				echo '<script>alert("您的成绩为不合格！");</script>';
			}
		}else{
			echo '<script>alert("输入非法，请重新输入！");</script>';
		}
		}
	if(isset($_GET['reset'])){
		//echo '<script>alert("重置成功");</script>';
	}
 ?>
<caption><h1>请输入分数查询成绩</h1></caption> <form action="test8.php" method="get" accept-charset="utf-8">
	分数：<input type="text" name="num">
	<input type="submit" name="sub" value="查询"/>
	<input type="submit" name="reset" value="重置"/>
</form>