<?php
	include('../core/session.php');
	require('../core/databese.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Control de Clientes</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

   <?php require ('../core/topnav.php'); ?>
	
    <div class="container">
		<div class="rowCenter">
            <div class="jumbotron">
				<h2>Presupuestos<span class="fright"><input type="text" class="form-control col-md-4" placeholder="Nº Orden"></span></h2>
				<hr>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nº Orden</th>
								<th>Cliente</th>
								<th>Marca</th>
								<th>Modelo</th>
								<th>Falla</th>
								<th>Presupuesto</th>
								<th>Tecnico asignado</th>
								<th>Edición</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						
						// Use result
//Aca recorres todas las filas y te va devolviendo el resultado
$query = mysql_query("SELECT * FROM new_order"); 

while ($row = mysql_fetch_array($query)) {
	echo "<tr class=\"".$row['no_rapair_info']."\">";
echo "<td>".$row['no_order_number']."</td>";
echo "<td>".$row['no_first_last_name']."</td>";
echo "<td>".$row['no_brand']."</td>";
echo "<td>".$row['no_model']."</td>";
echo "<td>".$row['no_failure_description']."</td>";
echo "<td>$".$row['no_final_cost']."</td>";
echo "<td>".$row['no_assigned_technical']."</td>";
echo "<td><button type=button class=\"btn btn-primary btn-xs\">Editar</button> <button type=button class=\"btn btn-warning btn-xs\">Otros</button></td>";
echo "</tr>";
}
						?>
						</tbody>
					</table>
					<hr>
					<p>Los Colores identifican el estado de la reparacion ejemplo: Si el equipo esta reparado es verde, si el equipo se encuentra en taller es rojo y si falta alguna parte es amarillo</p>
			</div>
        </div>
	</div>
<?php
//Liberas el resultado
mysql_free_result($query);


//Cerras coneccion
mysql_close($link);
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
