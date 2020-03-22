
	
		<?php
		$server='localhost';
		$username='root';
		$password='';
		$dbname='qassim';
		$link=mysqli_connect($server,$username,$password,$dbname);
		if(!$link)
		{
			die('faild to connect database:'.mysqli_connect_error());
		}
		$sql="INSERT INTO student(first_name,last_name,Email) VALUES
				   ('i','am','am@gamil.com'),
				   ('who','are','who@gamil.com'),
				   ('my','father','father@gamil.com')";
			if(mysqli_query($link,$sql)){
				echo'record add successfully';
			}else{
				echo'faild to add a record:'.$sql.'<br/>'.mysqli_error($link);
			}	
		   mysqli_close($link);	
		?>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	