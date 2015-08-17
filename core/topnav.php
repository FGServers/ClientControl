	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Control de Clientes</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav">
			<li><a href="orden.php">Ver Orden</a></li>
			<li><a href="new_orden.php">Nueva Orden</a></li>
            <li><a href="presupuesto.php">Presupuestos</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido : <?php echo $login_session; ?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Configuraci&oacute;n</a></li>
					<li><a href="#">Notas Personales</a></li>
					<li class="divider"></li>
					<?php
						include('../core/security.php');
						if($few['level'] == 'admin'){ echo "<li><a href=\"../pages/tecnicos.php\">Crear Tecnicos</a></li>"; }else{ echo ""; }
					?>
					<li><a href="../logout.php">Salir</a></li>
				</ul>
			</li>
          </ul>
        </div>
      </div>
    </nav>