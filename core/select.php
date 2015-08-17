<?php
	$sql_cliente 	 = "SELECT DISTINCT `username` FROM `tecnicos` ORDER BY `username` ASC "; 
	$result_cliente  = mysql_query($sql_cliente); 
	$options_cliente = ''; 
	    
	while ($row_cliente = mysql_fetch_array($result_cliente))
	{	
		$options_cliente = $options_cliente.'<option value="'.$row_cliente['username'].'">'.$row_cliente['username'].'</option>'; 
	}
?>