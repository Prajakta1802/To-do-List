	
		
<?php
					
		
		$conn = mysqli_connect("localhost","root","","php_pro_db");
		if(mysqli_connect_errno($conn))
		{
			echo "<script>alert('Database Connection Failed.');</script>";
		}
		session_start();
	
	$Name = $_SESSION['user']; 
					
		
			$id=$_GET['id'];
			$tsk = $_POST['task'];
			
		$sql1 = "DELETE FROM tasks_user WHERE ID=$id";
				
		if(mysqli_query($conn,$sql1))
		{ 
		echo "Deleted Successfully";
             header("Location: ToDo_List.php");
		}
		else
		{
			echo "Error while Deleting data..";
			echo "<a href='ToDo_List.php'>Go Back</a>";
		}
		
?>
				
				
				
				
		
	