<?php 
	$homepage  =  file_get_contents ( 'http://www.example.com/' );
	echo  $homepage ;
 ?>
 <form method="post" accept-charset="utf-8">
	<input type="submit" name="sub1" value="同意" onclick="agree()"/>
	<input type="submit" name="sub2" value="不同意" onclick="disagree()"/>
</form>
<script>
	function agree(){
		//alert('注册成功');
		document.forms.action = 'next.php';
	}
	function disagree(){
		//alert('正在退出...');
		document.forms.action = 'index.php';
	}
</script>