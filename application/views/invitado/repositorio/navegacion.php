	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
					<span class="sr-only">Desplegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> <!-- boton para dispositivos moviles / para desplegar el menu -->
				<a href="<?= base_url()?>inicio/index" class="navbar-brand">MLP</a>
			</div>
			<!-- Inicia Menu -->
			<div class="collapse navbar-collapse navbar-right" id="navegacion-fm">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="<?= base_url()?>inicio/index">INICIO</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">MPL <samp class="caret"></samp></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?= base_url()?>servicios/servicio">SERVICIOS</a></li>
							<li class="divider"></li>
							<li><a href="<?= base_url()?>extenciones/extencion">EXTENSIONES</a></li>
							<li class="divider"></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">INVESTIGACIÓN <samp class="caret"></samp></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">PROYECTOS</a></li>
							<li class="divider"></li>
							<li><a href="#">PUBLICACIONES</a></li>
							<li class="divider"></li>
						</ul>
					</li>
					<li class="dropdown active">
						<a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button">APLICACIONES <samp class="caret"></samp></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?= base_url()?>nominas/nomina">NOMINAS</a></li>
							<li class="divider"></li>
							<li><a href="#">HORARIOS</a></li>
							<li class="divider"></li>
							<li><a href="<?= base_url()?>login/loginn">REPOSITORIO DIGITAL</a></li>
							<li class="divider"></li>
						</ul>
					</li>
				</ul>
				<form action="" class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="search" class="form-control" placeholder="Buscar"></input>
					</div>
					<button type="submit" class="btn btn-primary">
							<samp class="glyphicon glyphicon-search"></samp>
					</button>
				</form>

			</div>
		</div>	
		</nav>
	</header>