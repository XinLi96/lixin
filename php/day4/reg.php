<?php 
	include 'conn.php';
	if(isset($_POST['sub'])){
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		//判断密码是否一致
		if($pass == $repass){
			//判断用户名是否重复
			$sql = "select * from user where name='$name'";
			$query = mysqli_query($link,$sql);
			$result = mysqli_fetch_assoc($query);
			// var_dump($result);
			// die();
			if($result){
				echo "<script>alert('用户已存在，请重新输入！')</script>";
			}else{
				$flag = false;
				$arr = array('%','&',' ','=');
				for($i = 0;$i < strlen($name);$i++){
					for($j = 0;$j < count($arr);$j++){
						if($name[$i] == $arr[$j]){
							$flag = true;
						}
					}
				}
				if($flag){
					echo "<script>alert('用户名非法！')</script>";
				}else{
					$sql="insert into user(userid,name,pass) values(null,'$name','$pass')";
					$query=mysqli_query($link,$sql);
				}	
				
			}
		}else{
			echo "<script>alert('密码不一致，请重新输入！')</script>";
		}
	}
 ?>
 <meta charset="utf-8">
 <form action="reg.php" method="post">
 	用户名：<input type="text" name="name"><br/>
 	密码:<input type="password" name="pass"><br/>
 	确认密码：<input type="password" name="repass"><br/>
 	<input type="submit" name="sub" value="注册">
 	<input type="reset" name="res" value="重置">
 </form>