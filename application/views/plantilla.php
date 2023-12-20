<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<title>Plantilla Base</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    	<span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="collapsibleNavbar">
    	<ul class="navbar-nav">
      		<li class="nav-item">
        		<a class="nav-link" href="#">Inicio</a>
      		</li>
    	</ul>
  </div>
</nav>
	</header>
	<div id="container">
		<!-- VISTAS -->
		<div class="col-md-10">
			<header>
				
			</header>
			<div class="row">
				<div class="col-md-12">
					<?php
						$this->load->view($contenido);
					?>	
				</div>
			</div>
		</div>
		<footer>
			<center>&copy; 2021 | Todos los derechos reservados por Nach</center>
		</footer>
	</div>
</body>
</html>