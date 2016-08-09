<?php 
	include 'conn.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		// var_dump($id);
		// die();
		$sql = "select * from blog where blogid='$id'";
		$query = mysqli_query($link,$sql);
		// var_dump($query);
		// die();
		$result = mysqli_fetch_array($query);
		// var_dump($result);
		// die();
?>
	<h2>标题:<?php echo $result['title']?></h2>
	<li><?php echo $result['time']?></li>
	<p><?php echo $result['content']?></p>

<?php
	}
 ?>
 <h4>评论区：</h4><hr/>
<?php 
	if($_GET['sub']){
		$text = $_GET['text'];
		$userid = $_COOKIE['userid'];
		$name = $_COOKIE['name'];

		$sql1 = "insert into message(mid,mcon,mtime,sname) values (null,'$text',now(),'$name')";
		// var_dump($sql1);
		// die();
		$query1 = mysqli_query($link,$sql1);
		// var_dump($query1);
		// die();
		$sql2 = "select * from message order by mid desc";
		$query2 = mysqli_query($link,$sql2);
		while($result1 = mysqli_fetch_array($query2)){
			// var_dump($result1);
			// die();

?>
<hr/>
	<h2>来自:<?php echo $result1['sname']?></h2>
	<li><?php echo $result1['mtime']?></li>
	<p><?php echo $result1['mcon']?></p>
<hr/>
<?php			
		}
	}
 ?>
 <hr/>
<form action='pl.php' method="get">
	<input type="hidden" name="id" value="<?php echo $id?>">
	<textarea cols="100" rows="10" name="text"></textarea>
	<input type="submit" name="sub" value="发表评论">
</form>
<a href="index.php">返回主页</a>