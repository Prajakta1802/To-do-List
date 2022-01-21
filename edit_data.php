<html>	
	<head>
	<style>
	.icn
            {
               margin: 0 450px;
			   position: relative;
			   top: -40px;
			   width:55px;
			   height:50px;
			   border-radius: 50px;
			   border: 1px solid whitesmoke;
			   background-color:antiquewhite;
            }
			.outer
            {
                margin:50px 200px 50px 400px;
                height:20%;
                width:50%;
                background-color:darksalmon;
                
            }
	</style>
		</head>
<?php
					
		
		$conn = mysqli_connect("localhost","root","","php_pro_db");
		if(mysqli_connect_errno($conn))
		{
			echo "<script>alert('Database Connection Failed.');</script>";
		}
		session_start();
	
	$Name = $_SESSION['user']; 
					
		
			$id=$_GET['id'];
			
			 $sql = "SELECT Task FROM tasks_user WHERE ID =$id"; 
  $result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$task=htmlspecialchars($row["Task"]);
			//echo $row["Task"];
			//echo $task;
		}
	}
	
	
	echo "<div class='outer'>";
	echo "<h1><center>Editing Values</center></h1>";
	echo "<br><br>";
	echo "<form id='frm' name='frm' method='POST' action=update_data.php?id=".$id.">";
	
					echo "<input id='task' name='task' style='font-size:20px;padding-left:20px;margin-left:80px;' required value='$task'>"; 
            
			 echo "<input type = 'submit' value ='submit' class='icn fa fa-plus-square'  name='insert'>";
   echo "</form>";
	echo "</div>";
			
			
					
		
?>
				
</html>		
				
				
		
	