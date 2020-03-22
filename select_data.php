


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
		while($row=mysqli_fetch_assoc($result)){
			echo'id'.$row["id"].'-Name:'.$row["first_name"].'_'.$row["last_name"].'-Email:'.$row["Email"].'<br/>';
		}
	}else{
		echo' 0 result';
	}
	mysqli_close($conn);
	?>