<?php 
		$info = array(
		'user' => array(
			array(1,'zhangsan',10,'nan'),
			array(2,'lisi',12,'nv'),
			array(3,'wangwu',13,'nan'),
		),
		'score' => array(
			array(1,100,90,80),
			array(2,20,43,60),
			array(3,54,67,21),
		),
		'connect' => array(
			array(1,'110','aaa@bb.com'),
			array(2,'220','ccc@dd.com'),
			array(3,'330','eee@ff.com'),
		)
		);
		foreach($info as $k=>$v){
			echo '<caption><h3 align="center">'.$k.'</h3></caption>';
			echo "<table border='1' align='center' width='600'>";
			foreach($v as $v1){
				echo '<tr>';
				foreach($v1 as $v2){
					echo "<td>";
					echo $v2;
					echo "</td>";
				}
				echo '</tr>';
			}
			echo '</table>';
		}
	
		
	
	
	
	
	// $user=array(
		// array(1,'zhangsan','male'),
		// array(2,'lisi','male'),
		// array(3,'wangwu','female'),
	// );
// 	
	// foreach($user as $v){
		// foreach($v as $value){
			// var_dump($value);
			// echo '<br/>';
		// }
	// }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
 ?>
