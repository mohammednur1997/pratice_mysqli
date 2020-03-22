	
	
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
	$sql='SELECT id,first_name,last_name,Email FROM student';
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($rows=mysqli_fetch_assoc($result)){
			echo'id='.$rows['id'].'-Name='.$rows['first_name'].''.$rows['last_name'].'-Email='.$rows['Email'].'<br/>';
		}
	}else{
		echo'0 result';
	}
	mysqli_close($conn);
	?>