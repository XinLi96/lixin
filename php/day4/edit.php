<?php 
	include 'conn.php';
	$id = $_GET['id'];

	if(isset($_GET['id'])){
		
		$sql = "select * from blog where blogid='$id'";
		$query = mysqli_query($link,$sql);
		$result = mysqli_fetch_array($query);
	}
	if(isset($_POST['sub'])){
		$title = $_POST['title'];
		$content = $_POST['con'];
		$hid = $_POST['hid'];

		$sql = "update blog set title='$title',content='$content' where blogid='$hid'";
		$query = mysqli_query($link,$sql);
		if($query){
			echo "<script>location='index.php'</script>";
		}else{
			echo "<script>alert('更新失败')</script>";
		}
	}
 ?>
 <meta charset="utf-8">
 <form action="edit.php" method="post">
 	<input type="hidden" name="hid" value="<?php echo $result['blogid']?>">
 	标题：<input type="text" name="title" value=<?php echo $result['title']?>><br/>
 	内容：<textarea rows="10" cols="30" name="con"><?php echo $result['content']?></textarea><br/>
 	<input type="submit" name="sub" value="更新">
 </form>