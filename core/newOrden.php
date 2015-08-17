<?php
	
	/**
	 * REGISTER ORDEN
	 **/
	
	$error	   = '';
	
	if(isset($_POST['submit'])) 
	{
		$orden 					= $_POST['norden'];
		$time  					= $_POST['time'];
		$hora  					= $_POST['hora'];
		$realname 				= $_POST['realname'];
		$code					= $_POST['code'];
		$telefono 				= $_POST['telefono'];
		$marca  				= $_POST['marca'];
		$modelo 				= $_POST['modelo'];
		$imei					= $_POST['imei'];
		$operador 				= $_POST['operador'];
		$fallas  				= $_POST['fallas'];
		$reparacion_presupuesto	= $_POST['reparacion_presupuesto'];
		$tecnico 				= $_POST['tecnico'];
		$email_cliente			= $_POST['email_cliente'];
		$costo_final 			= $_POST['costo_final'];
		$fecha_salida 			= $_POST['fecha_salida'];
		
		
		if(empty($_POST['marca'])){ //Validar Campos
			$error['modelo']= '';
		}
		if(empty($_POST['modelo'])){
			$error['marca']= '';
		}
		if(empty($_POST['imei'])){
			$error['base']= '';
		}
		if(empty($_POST['fallas'])){
			$error['cantidad']= '';
		}
		
		if(!$error)
		{

			$SQL = "INSERT INTO equipos ('', orden, time, hora, realname, code, telefono, marca, modelo, imei, operador, fallas, reparacion_presupuesto, tecnico, email_cliente, costo_final, fecha_salida) 
				VALUES ('$orden', '$time', '$hora', '$realname', '$code', '$telefono', '$marca', '$modelo', '$imei', '$operador', '$fallas', '$reparacion_presupuesto', '$tecnico', '$email_cliente', '$costo_final', '$fecha_salida')";
                 
			$Result = mysql_query($SQL) or die ( "<center>El Equipo Ya Existe!!! <br><a href=\"javascript:history.back()\">Regresar</a></center>");//or die(mysql_error());
			echo "<script language='JavaScript'> alert('La operacion ha resultado satisfactoria'); </script>";
		}
	}
	
?>