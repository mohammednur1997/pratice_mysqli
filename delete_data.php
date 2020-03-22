		
		
		
		<?php
		$server='localhost';
		$username='root';
		$password='';
		$dbname='qassim';
		$conn=mysqli_connect($server,$username,$password,$dbname);
		if(!$conn)
		{
			die('faild to connect database:'.mysqli_connect_error());
		}
		$sql='DELETE FROM student WHERE id=33';
		if(mysqli_query($conn,$sql))
		{
			echo'colum delete successfully';
		}else{
			echo'faild to delete data form table:'.mysqli_error($conn);
		}
		mysqli_close($conn);
		?>