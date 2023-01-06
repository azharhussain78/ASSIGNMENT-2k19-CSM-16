<?php
 include("db.php");
 
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$user_about = $_POST['user_about'];

 if($con){
 	$sql = "INSERT INTO users(`about`, `email`, `password`, `username`) 
 	VALUES ('$user_about','$user_email','$user_password','$user_name')";

 	$query = mysqli_query($con,$sql);
 	echo $query;
 	if($query){
 		echo "<h1> Data Inserted SUccessfully! </h1>";
 	}else{
 		echo "Error occured...";
 	}
 }
 $con->close();
?>