<?php
	include "conn.php"; 
	if(isset($_POST['sub'])){
		$name = $_POST['name'];
		$pass = $_POST['pass'];

		$sql = "select * from user where name='$name'";
		$query = mysqli_query($link,$sql);
		$result = mysqli_fetch_array($query);

		if(($result['pass'] == $pass) || ($result['name'])){
			setcookie('userid',$result['userid']);
			setcookie('name',$result['name']);
			echo "<script>alert('登录成功')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			echo "<script>alert('登录失败')</script>";
		}
	}
 ?>
<meta charset="utf-8">
 <form action="login.php" method="post">
 	用户名：<input type="text" name="name"><br/>
 	密码:<input type="password" name="pass"><br/>
 	<input type="submit" name="sub" value="登录">
 	<input type="reset" name="res" value="重置">
 </form>