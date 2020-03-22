		
		
		
		<?php
		$server='localhost';
		$username='root';
		$password='';
		$dbname='qassim';
		$conn=mysqli_connect($server,$username,$password,$dbname);
		if(!$conn)
		{
		   die('faild to connect database:'.mysqli_connect_error($conn));	
		}
		              //sql code for multipi data
		$sql="INSERT INTO student(first_name,last_name,Email)
		VALUES('murad','koi','gasa@gamil.com');";
		
		$sql .="INSERT INTO student(first_name,last_name,Email)
		VALUES('ami','jani','na@gamil.com');";
		
		$sql .="INSERT INTO student(first_name,last_name,Email)
		VALUES('tui','kno','janos@gamil.com')";
		
		if(mysqli_multi_query($conn,$sql))
		{
			echo'add a record successfully';
		}else
		{
			echo'faild to add a record'.$sql.'<br/>'.mysqli_error($conn);
		}
		mysqli_close($conn);
		?>