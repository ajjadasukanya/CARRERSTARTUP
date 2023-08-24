<?php

$con=mysqli_connect("localhost","root","","contactdb");
if(!$con)
{

	//  if the connection fails then alerting a message stating connection failed.
	die("Error : Connection failed". mysqli_error($con));
}
else
{
	if(isset($_POST['send']))
	{
		$name=$_POST['name'];
		$mail=$_POST['email'];
		$queries=$_POST['query'];
		$s="insert into dbcontact
		(name,email,quries) values('$name',
			'$mail','$queries')";
		if(mysqli_query($con,$s))
			{
				// alerting a message.
				echo "<script>alert('Successfully taken your report')</script>";
				echo "<script>window.open('contact.html','_self')</script>";
				// redirecting to the login page .
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
}
?>