<?php
$server='localhost';
$username='root';
$password='';
$conn=mysqli_connect($server,$username,$password);
if(!$conn){
	die('Faild to connect database:'.mysqli_connect_error());
}
$sql='CREATE DATABASE qassim';
if(mysqli_query($conn,$sql)){
	echo'Database create succassfully';
}else{
	echo'Faild to create database:'.mysqli_error($conn);
}
mysqli_close($conn);
?>