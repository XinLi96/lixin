<base href="<?php echo site_url();?>">
<?php 
	
?>
<form align="center" action="blog/do_edit" method="post">
	<input type="hidden" name="id" value="<?php echo $show->blogid?>">
	<h2>标题：<?php echo $show->title?></h2>
	<li>时间：<?php echo $show->time?></li>
	<h3>访问量：<?php echo $show->hits?></h3>
	内容<textarea cols="30" rows="30" name="con"><?php echo $show->content?></textarea>
	<input type="submit" name="sub" value="更新">
</form>