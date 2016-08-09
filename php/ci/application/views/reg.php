<meta charset="utf-8">
<base href="<?php echo site_url(); ?>">

<link rel="stylesheet" type="text/css" href="css/1.css">
<div id='c1'>
<form action="user/do_reg" method="post">
	用户名：<input type="text" name="username"><br/>
	密码：<input type="password" name="pass"><br/>
	确认密码：<input type="password" name="repass"><br/>
	<input type="submit" name="sub" value="注册">
	<input type="reset" name="res" value="重置">
</form>
</div>