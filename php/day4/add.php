<?php 
	include "conn.php";
	if(isset($_POST['sub'])){
		$title = $_POST['title'];
		$con = $_POST['con'];
		$cate = $_POST['cate'];
		$arr = '';

		for($i = 0;$i < count($cate);$i++){
			$arr = $arr . $cate[$i];
		}
		
		$sql = "insert into blog(blogid,title,content,time,cate) values (null,'$title','$con',now(),'$arr')";
		$query = mysqli_query($link,$sql);
		if($query){
			echo "<script>alert('插入数据成功')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			echo "<script>alert('插入数据失败')</script>";
		}
	}
 ?>
<meta charset="utf-8">
<form action="add.php" method="post">
	标题：<input type="text" name="title"><br/>
	内容：<textarea rows="10" cols="30" name="con"></textarea><br/>
	生活<input type="checkbox" name="cate[]" value="生活">
	学习<input type="checkbox" name="cate[]" value="学习">
	运动<input type="checkbox" name="cate[]" value="运动">
	吐槽<input type="checkbox" name="cate[]" value="吐槽"><br/>
	<input type="submit" name="sub" value="发表">
</form>