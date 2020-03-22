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
		
		//set sql value
		$sql="INSERT INTO student(first_name,last_name,Email)
		VALUES('asik','khan','khan@gamil.com');";
		$sql .="INSETR INTO student(first_name,last_name,Email)
		VALUES('samsu','kobi','kobi@gamil.com');";
		$sql .="INSETR INTO student(first_name,last_name,Email)
		VALUES('yui','tui','tui@gamil.com');";
		$sql .="INSETR INTO student(first_name,last_name,Email)
		VALUES('rasel','uddin','rasel@gamil.com');";
		$sql.="INSETR INTO student(first_name,last_name,Email)
		VALUES('yejid','alom','alom@gamil.com');";
		$sql .="INSETR INTO student(first_name,last_name,Email)
		VALUES('alom','tumi','koi@gamil.com');";
		$sql .="INSETR INTO student(first_name,last_name,Email)
		VALUES('feni','khan','collage@gamil.com')";
		
		if(mysqli_multi_query($conn,$sql))
		{
		  echo'data add successfully';	
		}else{
		   echo'faild to add data in table'.mysqli_error($conn);
		}
		mysqli_close($conn);
		?>

