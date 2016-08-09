<?php 
	if(isset($_GET['id'])){
		setcookie('userid',null);
		setcookie('name',null);
		echo "<script>location='index.php'</script>";
	}
 ?>
 