 <base href="<?php echo site_url();?>">
<?php 
	$name = $this->session->userdata('name');
	if($name){
		echo $name.'已登录';
	}else{
		echo "游客";
	}
 ?>
 <a href="blog/insert/">添加文章</a><br/>
分类查看：<a href="">生活</a>
<a href="">购物</a>
<a href="">财经</a>
<a href="">体育</a>
<?php 
	foreach ($blog as $v) {
?>
	<h2><a href="blog/chakan/<?php echo $v->blogid?>">标题：<?php echo $v->title?></a> | <a href="blog/edi/<?php echo $v->blogid?>">编辑</a> | <a href="blog/del/<?php echo $v->blogid?>">删除</a></h2>
	<li>日期：<?php echo $v->time?></li>
	<p>内容：<?php echo $v->content?></p>
	<hr/>
<?php		
	}
 ?>