<?php 
	include('db.php');
	$email = $_POST['email'];
	$password = $_POST['password'];
	if($con){
		$query = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' AND password='$password'");
		echo "<pre>";
		if(mysqli_num_rows($query)>0){
			session_start();
		   $user = mysqli_fetch_assoc($query);	
		   $_SESSION['user'] = $user;
           header("location:index.php");
		}
		echo "</pre>";
		
	}
?>