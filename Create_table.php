	
	
	<?php
    
 $server='localhost';
	 $username='root';
	 $password='';
	 $dbname='university';
	 $conn=mysqli_connect($server,$username,$password,$dbname);	 
	 if(!$conn)
	 {
		 die('faild to connect database:'.mysqli_connect_error());
	 }
	 $sql='CREATE TABLE employer(
	 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	 first_name VARCHAR(30) NOT NULL,
	 last_name VARCHAR(30) NOT NULL,
	 middel_name VARCHAR(30) NOT NULL,
	 email VARCHAR(50),
	 roll INT(10) NOT NULL,
	 reg_date TIMESTAMP
	 )';
	 if(mysqli_query($conn,$sql))
	 {
		echo'Table create sucssfully'; 
	 }else
	 {
		 echo'faild to create table:'.mysqli_error($conn);
	 }
	 mysqli_close($conn);
	?>