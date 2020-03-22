		
		
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
		$sql='DELETE FROM student WHERE id=5';
		if(mysqli_query($conn,$sql))
		{
			echo'data delete successfully';
		}else{
			echo'faild to delete data from data:'.mysqli_error($conn);
		}
		mysqli_close($conn);
			
		?>