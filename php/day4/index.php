<a href="add.php">添加文章</a>
<?php 
	if($_COOKIE['userid']){
		$id = $_COOKIE['userid'];
		echo "<a href='admin/admin.php'>"."<span>".$_COOKIE['name']." 已登录"."</span>"."</a>";
		echo "<a href='logout.php?id=$id'>".'退出'."</a>";
	}else{
		echo "<a href='login.php'>".'游客'."</a>";
	}
 ?><br/>
<form action="index.php" method="post">
 <input type="text" name="search">
 <input type="submit" name="sea" value="搜索"><br/>
</form>
文章分类：<a href="fenlei.php?cate=生活" name="life">生活</a>&nbsp;<a href="fenlei.php?cate=学习" name="study">学习</a>&nbsp;<a href="fenlei.php?cate=运动" name="sport">运动</a>&nbsp;<a href="fenlei.php?cate=吐槽" name="talk">吐槽</a>
<?php 
	include 'conn.php';

	if(isset($_POST['sea'])){
		$se = $_POST['search'];
		$e = "title like '%" . $se ."%'";
		echo '<a href="index.php">返回主页</a>';
	}else{
		$e = 1;
	}
	
	$sql = "select * from blog where $e order by blogid desc";
	// var_dump($sql);
	// die();
	$query = mysqli_query($link,$sql);
	// $result = mysqli_fetch_array($query);
	while($result = mysqli_fetch_array($query)){
 ?>
 
	<h2><a href="view.php?id=<?php echo $result['blogid']?>">标题:<?php echo $result['title']?></a> | <a href="edit.php?id=<?php echo $result['blogid']?>">编辑</a> | <a href="del.php?id=<?php echo $result['blogid']?>">删除</a> | <a href="pl.php?id=<?php echo $result['blogid']?>">评论</a></h2>
	<li><?php echo $result['time']?></li>
	<p><?php echo iconv_substr($result['content'],0,4).'...'?></p>
	<hr/>
<?php 
	}
 ?>