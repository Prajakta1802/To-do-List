<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>userProfile.php</title>
<style>
			.head
            {
                font-size: 40px;
                font-variant:small-caps;
                
            }
            .headOuter
            {
                height:50px;
                width:50%;
                background-color:deeppink;
                color:aqua;
                margin:0 400px;
            }
			.outer
            {
                margin:50px 200px 50px 400px;
                height:20%;
                width:50%;
                background-color:darksalmon;
                
            }
			input
            {
                margin-top:40px;
                margin-left:30px;
                width:50%;
                height:40px;
                top:30px;
            }
			
			.icn
            {
               margin: 0 450px;
			   position: relative;
			   top: -50px;
			   width:60px;
			   height:50px;
			   border-radius: 50px;
			   border: 1px solid whitesmoke;
			   background-color:antiquewhite;
			   font-family: monospace
			   font-size:20px
            }
			.outer1
            {
                margin:50px 200px 50px 400px;
                height:70%;
                width:50%;
                background-color:darksalmon;
			}
			.outer2
            {
                margin:50px 200px 50px 400px ;
                height:50%;
                width:50%;
				left:100px;
                background-color:crimson;
                
            }
			.liItem
            {
                font-size:20px;
                color:cyan;
            
            }
			.edit 
			{
				margin: 0 500px;
				position: relative;
				top: -67px;
				width:50px;
				height:45px;
				border-radius: 50px;
				border: 1px solid whitesmoke;
				background-color:antiquewhite;
			}
			.de
			{
				margin: 0 600px;
				position: relative;
				top: -113px;
				width:45px;
                height:45px;
				border-radius: 50px;
				border: 1px solid whitesmoke;
				background-color:antiquewhite;
			}
			.del
			{
				margin: 0 600px;
				position: relative;
				top: -45px;
				width:45px;
                height:45px;
				border-radius: 50px;
				border: 1px solid whitesmoke;
				background-color:antiquewhite;
			}
	
	
			.cmplt
			{
				margin: 0 400px;
				position: relative;
				top: -20px;
				width:50px;
                height:45px;
				border-radius: 50px;
				border: 1px solid whitesmoke;
				background-color:antiquewhite;
			}
			
</style>

</head>
<body>
<?php
session_start();
 $username = $_SESSION['user']; 
 ?>
 
 <div style="text-align:center"><h1>User Profile</h1></div>
 <br/>
 
 <div style="font-weight:bold"> Welcome <?php echo $username ?> </div>
  
 <div style="text-align: right"><a href="Logout.php">Logout</a></div> 
 
 <div >
        <div class="headOuter">
        <h2 class="head"><center><b> To-Do List</b></center></h2>
        </div>
        <div class="outer">
		<form id="frm" name="frm" method="POST" action="insert_data.php">
	<input id="task" name="task" placeholder="What needs to be done?" style="font-size:20px" required > 
            
			 <input type = "submit" class="icn fa fa-check"  name="insert">
   
	<br><br>
	</form>
        </div>
		</div>
 
 


<?php

$conn = new mysqli("localhost", "root", "", "php_pro_db");
// Check connection
$error="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $sql = "SELECT ID FROM user WHERE Uname = '$username' "; 
  $result = $conn->query($sql);
 
	$row = $result ->fetch_assoc();
	   $uid=$row["ID"];
	  
		  
	  
 
  $sql1 = "SELECT ID, Task, Status FROM tasks_user WHERE Status = 'False' AND U_ID= $uid"; 
  $result1 = $conn->query($sql1);

?>

<div id="panel" class="outer1">
     <br>   
<?php
if ($result1 ->num_rows > 0) {
	echo "<ul id='list' class='liItem'>";
		while($row = $result1 ->fetch_assoc()) {
			echo "<li>";
			echo $row["Task"];
			$id=$row["ID"];
		
			echo "<a class='cmplt fa fa-check' value='Complete' style='text-decoration:none;color:black;font-size:40px;padding-left:10px;' href=complete_data.php?id=".$id."></a>";
			echo "<a class='edit fa fa-pencil' value='Edit' style='text-decoration:none;color:black;font-size:40px;padding-left:10px;' href=edit_data.php?id=".$id."></a>";
			echo "<a class='de fa fa-trash-o' value='Delete' style='text-decoration:none;color:black;font-size:40px;padding-left:10px;' href=delete_data.php?id=".$id."></a>";
			echo "</li>";
			
		}
		echo "</ul>";		
}
else
{
	echo "<br>";
	echo "<h1 style='color:cyan'><center>No Entries for Tasks</center></h1>";
}
echo "</div>";

$sql1 = "SELECT ID, Task, Status FROM tasks_user WHERE Status = 'True' AND U_ID='$uid'"; 
  $result = $conn->query($sql1);

	echo "<div id='cmplt' class='outer2'>";
           echo "<br>";
            echo "<h2 style='font-size:30px;color:cadetblue;font-variant:small-caps;'><center><b>Completed Tasks</b></center></h2>";
       
        if ($result->num_rows > 0) {
	echo "<ul id='list' class='liItem'>";
		while($row = $result->fetch_assoc()) {
			echo "<li>";
			echo $row["Task"];
			$id=$row["ID"];
			echo "<a class='del fa fa-trash' value='Delete' style='text-decoration:none;color:black;font-size:40px;padding-left:10px;' href=delete_data.php?id=".$id."></a>";
			echo "</li>";
			
		}
		echo "</ul>";		
}
else{
	 echo "<br>";
echo "<h1 style='color:cyan'><center>No Entries for Completed Tasks</center></h1>";

}	
		echo "</div>";
		
        
	
	
        
  
  
  
   
?>

</body>
</html>
