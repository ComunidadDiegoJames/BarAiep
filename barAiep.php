<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
	<title></title>

	<!--Booststrap-->
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<!--Estilos-->
	<link rel="stylesheet" href="css/estilo.css">
	<!--JS de Bootstrap-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>
	<!--Norlalize css-->
	<link rel="stylesheet" href="css/normalize.css">

</head>
<body background="/imagenes/fondo.jpg">

<!--Top-->
<nav class="navbar navbar-default">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Cambiar navegacion</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	    <a href="index.php" class="navbar-brand">Proyecto</a>
	</div><!--Fin div nav header-->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-center">
			<li class="active"><a href="index.php">Inicio</a></li>
			<li><a href="index3.html">Productos</a></li>
			<li><a href="index.php">Copteles</a></li>
			<li><a href="index.php">Historia</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href=""> Redbull</a></li>
					<li><a href=""> Corona</a></li>
					<li><a href=""> Havana</a></li>	
				</ul>
			</li>
		</ul>
	</div>
</nav><!--Fin nav-->
	<!--Fin Top-->




	<!--section 1-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 color1">
			<img src="imagenes/aiep.png" class="img-responsive" id="img">
			</div>
			<div class="col-xs-6 color2">
				<form action="informes.php" method="post" class="form"></form>
				<input type="text" name="prueba" value="" placeholder="llenar info">
			<a href="informes/informe.php/" target="_blank">pdf</a>
			</div>
			</div>
		</div>
	</div>
</section>
<!--Fin section 1-->
<br>
<!--Section 1-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 color3">
			
			</div>
			<div class="col-xs-6 color4">
				
			</div>
		</div>
	</div>
</section>
	<!--Fin section 1-->
<br>
	<!--Footer-->
		<footer>
			<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4 col-lg-4 color5">
					
				</div>
				<div class="col-xs-12 col-md-4 col-lg-4 color6">
					
				</div>
				<div class="col-xs-12 col-md-4 col-lg-4 color7">
					
				</div>
			</div>
				
			</div>
		</footer>
	<!--Fin Footer-->

</body>
</html>