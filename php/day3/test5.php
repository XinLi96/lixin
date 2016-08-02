<form action="test5.php" method="get" accept-charset="utf-8">
	<caption><h3>请输入标题和日期</h3></caption>
	新闻标题：<input type="text" name="title"/><br/>
	新闻内容：<input type="text" name="content"/><br/>
	新闻日期：<input type="text" name="date"><br/>
	<input type="submit" name="sub" value="提交"/>	
</form>
<?php 
	if(isset($_GET['sub'])){
		$arr[] = $_GET['title'];
		$arr[] = $_GET['content'];
		$arr[] = $_GET['date'];
		
		$pri = implode('，', $arr);
		echo '转换字符串结果：'.$pri;
	}
 ?>
 