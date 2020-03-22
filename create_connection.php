








	<?php
	$server='localhost';
	$username='root';
	$password='';
	$link=mysqli_connect($server,$username,$password);
	if(!$link)
	{
		die('Database connect Error: '.mysqli_connect_error();
	}else{
		echo'mysqli connect succassfully';
	}
	mysqli_close($link);

	?>