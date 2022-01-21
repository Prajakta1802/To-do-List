
//Logout.php
<?php 
session_start();
 $username = $_SESSION['user']; 
 
 unset($_SESSION['user']); 
 session_destroy(); 
 header("location: LogInForm.php"); 
 exit();
 
 if(!isset($_SESSION['user'])) 
 {
 
 header("location:LogInForm.php");
 }
?>