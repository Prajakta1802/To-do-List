	
		
<?php
					
		if(isset($_POST['insert']))
		{
		$conn = mysqli_connect("localhost","root","","php_pro_db");
		if(mysqli_connect_errno($conn))
		{
			echo "<script>alert('Database Connection Failed.');</script>";
		}
					
		$Name = $_POST['nam'];
		$eml = $_POST['Email'];
		$passwd = $_POST['pass'];
						
		$sql1 = "INSERT INTO user (Uname,Passwd,Email) VALUES ('$Name', '$passwd', '$eml')";
		
		
						
		if(mysqli_query($conn,$sql1))
		{
		
    echo "<script>alert('OK')</script>";
		 header("Location: LogInForm.php");
	
		}
		}
		
?>
				
				
				
				
		
	