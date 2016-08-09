<?php 
	include 'conn.php';
	if(isset($_GET['username'])){
		$name = $_GET['username'];

		$sql = "select * from user where name='$name'";
		$query = mysqli_query($link,$sql);
		$result = mysqli_fetch_array($query);
		if($result){
			echo 'error';
		}else{
			echo 'lalala';
		}
	}
 ?>