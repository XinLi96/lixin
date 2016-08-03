<?php 
	$link =  mysqli_connect('localhost','root',''); //or die('连接失败');
	mysqli_select_db($link,'blogll'); //or die('连接失败');
	mysqli_set_charset($link,utf8);

 ?>