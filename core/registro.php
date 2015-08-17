<?php

	/**
	 * REGISTER
	 **/
	
	$error	   = '';
	$errors    = 0;
	$errorlist = "";
	
	if(isset($_POST['submit'])) 
	{
		$username = $_POST['username'];
		$email	  = $_POST['email'];
		$pw		  = $_POST['password'];
		$pw_rep	  = $_POST['rep_password'];
		$level	  = $_POST['level'];
		$reqlen	  = strlen($username) * strlen($email) * strlen($pw) * strlen($pw_rep) * strlen($level);
		
		if ( $reqlen > 0 ) {
			if ( $pw === $pw_rep ) {
				require('../core/databese.php');
				$pass	  = md5($pw);
				mysql_query("INSERT INTO tecnicos VALUES('','$username','$email','$pass','$level')");
				mysql_close($link);
				$error = '<font color=lime><b>El tecnico se a registrado correctamente.</b></font>';
			} else {
					$error = '<font color=red><b>Las contraseñas no coinciden.</b></font>';
			}
		} else {
			$error = '<font color=red><b>Por favor, complete todos los campos.</b></font>';
		}
	}
?>