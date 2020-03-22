	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Select data by table</title>
    <style type="text/css">
          body{
              background-color: #3b3b3c;
              font-size: 20px;
              margin-left: 168px;
              margin-top: 50px;
        }
         
          h2{
              color:red;
              padding-top: 32px;
          }
            .main{
                background-color: yellow;
                width: 1000px;
                height: 970px;
                margin: 0;
                text-align:center;
            }
            .header{
                 background-color:green;
                width: 1000px;
                height: 100px;
                border-radius: 5px 5px;
            }
            .contaient{
                    background-color: red;
                    width: 1000px;
                    height: 770px;
                    text-align: center;
                    float: left;
                    text-align:center;
            }
        table td{
            border: 2px solid white;
            padding: 4px 10px;
        }
        table th{
            border: 2px solid white;
        }
        .middel{
             background-color: red;
                    width: 700px;
                    height: 770px;
               padding-left: 244px;  
        }
        .footer{
             background-color: yellow;
             width: 1000px;
             height: 100px;
             
        }
        .footer p{

        }
    </style>
	</head>
	<body>
	<div class="main">
	
        <div class="header">
            <h2>This is my php_mysqli</h2>
        </div>
               <div class="contaient">
                       <div class="middel">
                        <?php
                /* Attempt MySQL server connection. Assuming you are running MySQL
                server with default setting (user 'root' with no password) */
                $link = mysqli_connect("localhost", "root", "", "qassim");

                // Check connection
                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                // Attempt select query execution
                $sql = "SELECT * FROM student";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<table>";
                            echo "<tr>";
                                echo "<th>Id</th>";
                                echo "<th>First-name</th>";
                                echo "<th>Last-name</th>";
                                echo "<th>Email</th>";
                            echo "</tr>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['first_name'] . "</td>";
                                echo "<td>" . $row['last_name'] . "</td>";
                                echo "<td>" . $row['Email'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";

                         // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo "No records matching your query were found.";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }

                // Close connection
                mysqli_close($link);
				
				?>
                </div>
                </div>
                
                <div class="footer">
                    <p><?php echo'our footer is here,please visite our website';?>
                    <a href="http://www.google.com">google</a>
                    </p>
                </div>

			</div>
		</body>
	</html>