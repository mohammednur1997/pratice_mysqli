	



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
		//create sql code
		$sql="INSERT INTO student(first_name,last_name,Email)
		VALUES('murad','nur','nur@gamil.com')";
		if(mysqli_query($conn,$sql))
		{
			$last_id=mysqli_insert_id($conn);
			echo "new record add successfully.add a last id:".$last_id;
		}else{
			echo "faild to add a record:" .$sql."<br/>" .mysqli_error($conn);
		}
		mysqli_close($conn);
		
		?>