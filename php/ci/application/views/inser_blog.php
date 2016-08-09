<meta charset="utf-8">
<base href="<?php echo site_url();?>">
<link rel="stylesheet" type="text/css" href="css/2.css">
<form align="center" action="blog/do_insert" method="post">
	标题：<input type="text" name="title" id="i1"><br/>	
	内容：<textarea name="con" cols="30" rows="30" id="i2"></textarea>
	<select name="leibie">
		<option value="生活">生活</option>
		<option value="购物">购物</option>
		<option value="财经">财经</option>
		<option value="体育">体育</option>
	</select>
	<input type="submit" name="sub" value="发表">
	<!-- <input type="hidden" name="time" value="">  -->
</form>