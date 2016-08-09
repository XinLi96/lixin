<?php 
	include 'conn.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "select * from blog where blogid='$id'";
		$query = mysqli_query($link,$sql);
		$result = mysqli_fetch_array($query);
		$num = $result['hits']+1;
		$sql1 = "update blog set hits='$num' where blogid='$id'";
		$query1 = mysqli_query($link,$sql1);
		$query = mysqli_query($link,$sql);
		$result = mysqli_fetch_array($query);
	}
 ?>
 <h2><?php echo $result['title']?></h2>
 <li><?php echo $result['time']?></li>
 <span>访问量：<?php echo $result['hits']?></span>
 <p><?php echo $result['content']?></p>