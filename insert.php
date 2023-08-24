<?php

include 'config.php';

if(isset($_POST['submit']))
{
	$name=$_POST['user'];
	$mail=$_POST['email'];
	$pass=$_POST['password'];
	$gender=$_POST['gender'];
	$number=$_POST['phonenumber'];
	$s="insert into details
	(username,email,password,gender,phonenumber) values('$name',
		'$mail','$pass','$gender','$number')";
	if(mysqli_query($con,$s))
		{
			// alerting a message.
			echo "<script>alert('Registeration Successfully')</script>";	
			// redirecting to the login page .
			echo "<script>window.open('login.html','_self')</script>";
		}
		// if the query fails
		else
		{
			// displaying an error message.
			echo "error:Failed to connect";
		}
		// terminating the database connection.
		mysqli_close($con);
}
?>