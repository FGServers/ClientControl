<?php
	session_start(); // Starting Session
	$error	=	''; // Variable To Store Error Message
	
	if (isset($_POST['submit'])) 
	{
		if (empty($_POST['username']) || empty($_POST['password'])) 
		{
			$error = "Nombre de usuario o contraseña no es válida";
		}
		else
		{
			// Define $username and $password
			$username	= $_POST['username'];
			$password	= $_POST['password'];
			
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysql_connect("localhost", "root", "root");
			
			// To protect MySQL injection for Security purpose
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string(md5($password));
			
			// Selecting Database
			$db = mysql_select_db("client_control", $connection);
			
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysql_query("select * from tecnicos where password='$password' AND username='$username'", $connection);
			$rows = mysql_num_rows($query);
			
			if ($rows == 1) 
			{
				$_SESSION['login_user']	= $username; // Initializing Session
				header("location: pages/orden.php"); // Redirecting To Other Page
			} 
			else 
			{
				$error = "Nombre de usuario o contraseña no es válida";
			}
			
			mysql_close($connection); // Closing Connection
		}
	}
?>