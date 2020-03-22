<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>insert data by php</title>
</head>
<body>
  
     <?php
       $server='localhost';
      $username='root';
      $password='';
      $dbname='qassim';
    
       $conn=mysqli_connect($server,$username,$password,$dbname);
      if(!$conn){
          die('faild to connect database'.mysqli_connect_error());
          
      }
    
    //create a empty value
    $firstError=$lastError=$emailError='';
    
       if($_SERVER['REQUEST_METHOD']=='POST')
        {
        if(empty($_POST['fistName'])){
            $firstError='Required your input';
            
        }else{
            $first_name=$_POST['fistName'];
        }
        
        if(empty($_POST['lastName'])){
            $lastError='Required your input';
            
        }else{
             $last_name=$_POST['lastName'];
        }
           
            if(empty($_POST['gmail'])){
            $emailError='Required your input';
            
        }else{
            $Gmail=$_POST['gmail'];
        }
        
        
        
     }
    
    
    
    //sql code for add data in mysqli
    $sql="INSERT INTO student(first_name,last_name,Email) VALUES('$first_name','$last_name','$Gmail')";
    
    if(!isset($sql))
    {
      echo'input your data';  
    }else
    {
       if(mysqli_query($conn,$sql))
       {
        echo'new record add database';
       }else{
        echo'faild to add a record: .$sql <br/>'.mysqli_error($conn);
    } 
    }    
    ?>  
      <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
         <input type="text" name="fistName">
         <span><?php echo $firstError;?></span>
          <br>
         <input type="text" name="lastName"> 
         <span><?php echo $lastError;?></span>
         <br>
         <input type="eamil" name="gmail">
         <span><?php echo $emailError;?></span>
           <br>
         <input type="submit" value='submit'>
     </form>
     
    
   
</body>
</html>
