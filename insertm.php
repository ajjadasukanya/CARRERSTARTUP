<?php

include 'configm.php';

if(isset($_POST['submit']))
{
	$name=$_post['user'];
	$mail=$_post['email'];
	$pass=$_post['password'];
	$gender=$_post['gender'];
	$number=$_post['phonenumber'];
	$s="insert into details
	(username,email,password,gender,phonenumber) values('$name',
		'$mail','$pass','$gender','$number')";
	if(mysqli_query($con,$s))
		{
			// alerting a message.
			echo "<script>alert('Registeration Successful')</script>";	
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