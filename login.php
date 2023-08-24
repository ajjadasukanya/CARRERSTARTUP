<?php
include 'config.php';
if(isset($_POST['login']))
{
	$mail=$_POST['email'];
	$pass=$_POST['password'];
	$sql="select * from details where email='$mail' and password='$pass'";
	$query=mysqli_query($con,$sql);
	if(mysqli_num_rows($query)>0)
	// if the details are valid then
	{
		// displaying a successful login notification as a reminder.
		echo "<script>alert('login successful')</script>";
		// Redirecting to the dashboard page.
		echo "<script>window.open('career.html','_self')</script>";
	}
	// if the details are invlaid
	else
	{
		// Alerting an Error Message
		echo "<script>alert('Invalid Login details')</script>";
		echo "<script>window.open('login.html','_self')</script>";
	

	}
		// Refreshing the login page to re-enter login details.
	}


?>