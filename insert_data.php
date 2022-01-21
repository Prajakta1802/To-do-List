	
		
<?php
					
		if(isset($_POST['insert']))
		{
		$conn = mysqli_connect("localhost","root","","php_pro_db");
		if(mysqli_connect_errno($conn))
		{
			echo "<script>alert('Database Connection Failed.');</script>";
		}
		
	session_start();
	$username = $_SESSION['user']; 
				
				$sql = "SELECT ID FROM user WHERE Uname = '$username' "; 
  $result = $conn->query($sql);
 
	$row = $result ->fetch_assoc();
	   $uid=$row["ID"];
	   echo $uid;
	


				
		$tsk = $_POST['task'];
		$state="False";
						
		$sql1 = "INSERT INTO tasks_user (Task,Status,U_ID) VALUES ('$tsk', '$state','$uid')";
				
		if(mysqli_query($conn,$sql1))
		{ 
		echo "<script>alert('Data Inserted Successfully');</script>";
             header("Location: ToDo_List.php");
		}
		else
		{
			echo "Error while inserting data..";
			echo "<a href='ToDo_List.php'>Go Back</a>";
		}
		}
?>
				
				
				
				
		
	