<meta charset="utf-8">

<?php 
	include 'conn.php';
	if(isset($_GET['cate'])){
		$cate = $_GET['cate'];
		// var_dump($cate);
		// die();
		echo "<span>$cate</span>".'&nbsp;'.'<a href="index.php">返回主页</a>';
		$sql = "select * from blog where cate like '$cate'";
		$query = mysqli_query($link,$sql);
		while($result = mysqli_fetch_array($query)){
			// if(where $result['cate'] like %$cate%){
?>
		<h2><a href="view.php?id=<?php echo $result['blogid']?>">标题:<?php echo $result['title']?></a> | <a href="edit.php?id=<?php echo $result['blogid']?>">编辑</a> | <a href="del.php?id=<?php echo $result['blogid']?>">删除</a></h2>
		<li><?php echo $result['time']?></li>
		<p><?php echo iconv_substr($result['content'],0,4).'...'?></p>
		<hr/>
<?php			
			
		}
		
	}
 ?>