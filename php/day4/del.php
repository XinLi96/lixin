<?php 
	include 'conn.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		
		$sql = "delete from blog where blogid='$id'";
		// var_dump($sql);
		// die();
		$query = mysqli_query($link,$sql);
		// $result = mysqli_fetch_array($query);
		// var_dump($query);
		// die();
		if($query){
			echo '<script>location="index.php"</script>';
		}else{
			echo '<script>alert("删除失败")</script>';
		}
	}
 ?>