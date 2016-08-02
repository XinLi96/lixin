<?php 
	$dir = 'C:\xampp';
	readFiled($dir);
	echo '文件夹：'.$sum.'<br/>';
	echo '文件：'.$num.'<br/>';
	
	$num = 1;
	$sum = 1;
	
	function readFiled($dir){
		global $num;
		global $sum;
		if(!is_dir($dir)){
			return false;
		}
		$handle = opendir($dir);
		while(($file = readdir($handle)) != FALSE){
			if(($file == '.') || ($file == '..')){
				continue;
			}
			$file = $dir.DIRECTORY_SEPARATOR.$file;
			if(is_file($file)){
				$num++;
				//echo $file.'<br />';
			}else if(is_dir($file)){
				$sum++;
				readFiled($file);
			}
		}
	}
 ?>