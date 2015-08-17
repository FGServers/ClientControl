<?php
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	
	include('../core/session.php');
	require('../core/newOrden.php');
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
    <link rel="icon" href="favicon.ico">

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
				<h2>Registro de nueva orden<span class="fright"><input type="text" class="form-control col-md-4" placeholder="Nº Orden"></span></h2>
				<hr>
				<form>
				<div class="row">
					<div class="col-md-2"><label>Hora Ingreso</label> <input type="text" class="form-control" placeholder="<?php echo date("H:i:s");?>" disabled></div>
					<div class="col-md-2"><label>Fecha Ingreso</label> <input type="text" class="form-control" placeholder="<?php echo date("d/m/Y");?>" disabled></div>
					<div class="col-md-4"><label>Apellido y Nombre Titular/Empresa</label> <input type="text" class="form-control" placeholder="Apellido y NombreTitular/Empresa"></div>
					<div class="col-md-2"><label>Cod. Area</label> <input type="text" class="form-control" placeholder="0342"></div>
					<div class="col-md-2"><label>Telefono</label> <input type="text" class="form-control" placeholder="Nº de Telefono"></div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label>Marca</label>
						<select class="form-control">
							<option value="">Seleccionar el Modelo</option>
							<option value="">Alcatel</option>
							<option value="">Apple</option>
							<option value="">Blackberry</option>  
							<option value="">HTC</option>
							<option value="">Huawei</option> 
							<option value="">Lenovo</option>
							<option value="">LG</option>
							<option value="">Microsoft</option>
							<option value="">Motorola</option>
							<option value="">Nokia</option> 
							<option value="">Philips</option>	
							<option value="">Samsung</option>
							<option value="">Sony</option>
							<option value="">Sony Ericsson</option>
							<option value="">Xiaomi</option>
							<option value="">ZTE</option>
						</select>
					</div>
					<div class="col-md-2"><label>Modelo</label> <input type="text" class="form-control" placeholder="Modelo"></div>
					<div class="col-md-4"><label>ESN / IMEI</label> <input type="text" class="form-control" placeholder="ESN / IMEI"></div>
					<div class="col-md-2">
						<label>Operador</label>
						<select class="form-control">
							<option value="">Sel. Operador</option>
							<option value="">Claro</option>
							<option value="">Movistar</option>  
							<option value="">Personal</option>
							<option value="">Libre</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12"><label>Descripcion de las Fallas</label> <textarea class="form-control" rows="5" placeholder="Describa la falla del equipo"></textarea></div>
				</div>
				<div class="row">
					<div class="col-md-12"><label>Descripcion de Reparacion / Presupuesto</label> <textarea class="form-control" rows="5" placeholder="Descripcion de Reparacion / Presupuesto"></textarea></div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<label>Asginar Tecnico</label> 
						<select class="form-control">
							<option value="">Asignar Tecnico</option>
							<option value="">Tecnico 1</option>
							<option value="">Tecnico 2</option>  
							<option value="">Tecnico 3</option>
							<option value="">Tecnico 4</option>
						</select>
					</div>
					<div class="col-md-3"><label>E-Mail Cliente</label> <input type="text" class="form-control" placeholder="Email del cliente"></div>
					<div class="col-md-3"><label>Costo Final</label> <input type="text" class="form-control" placeholder="$0000"></div>
					<div class="col-md-3"><label>Fecha Salida</label> <input type="text" class="form-control" placeholder="00/00/00"></div>
				</div>
				<hr>
				<div class="row fleft">
					<button type="button" class="btn btn-danger" onClick="this.form.reset()">Borrar</button>
					<button type="button" class="btn btn-primary">Guardar</button>
					<button type="button" class="btn btn-warning" onclick="window.print();">Imprimir</button>
				</div>
				</form>
			</div>
        </div>
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
