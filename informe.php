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
<body>
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
			<li><a href="index.php">Informe</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Interes <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href=""> interes 1</a></li>
					<li><a href=""> interes 2</a></li>
					<li><a href=""> interes 3</a></li>	
				</ul>
			</li>
		</ul>
	</div>
</nav><!--Fin nav-->
	<!--Fin Top-->
<br>
	<br>
	<br>
<div class="container">
    <h1 class="center">Inventario Responsive</h1><br>
    <a href="informes/informe.php/" class="btn btn-success btn-lg" id="pdf" target="_blank" >PDF</a><br>
        
        <div class="table-responsive">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr class="active">
                    <th class="center">CODIGO</th>
                    <th class="center">NOMBRE</th>
                    <th class="center">BODEGA</th>
                    <th class="center">VENTA</th>
                    <th class="center">FISICO</th>
                    <th class="center">DIFERENCIA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="center">1</td>
                    <td align="center">Pisco alto 35º</td>
                    <td align="right">10.5</td>
                    <td align="right">0.1</td>
                    <td align="right">10.7</td>
                    <td align="right">0.9</td>
                </tr>
                <tr>
                    <td align="center">2</td>
                    <td align="center">Pisco Mistral 35º</td>
                    <td align="right">9.3</td>
                    <td align="right">0.7</td>
                    <td align="right">8.4</td>
                    <td align="right">0.9</td>
                </tr>
                <tr>
                    <td align="center">3</td>
                    <td align="center">Pisco alto 35º</td>
                    <td align="right">10.5</td>
                    <td align="right">0.1</td>
                    <td align="right">10.7</td>
                    <td align="right">0.9</td>
                </tr>
                <tr>
                    <td align="center">4</td>
                    <td align="center">Pisco Mistral 35º</td>
                    <td align="right">9.3</td>
                    <td align="right">0.7</td>
                    <td align="right">8.4</td>
                    <td align="right">0.9</td>
                </tr>
                <tr>
                    <td align="center">5</td>
                    <td align="center">Pisco alto 35º</td>
                    <td align="right">10.5</td>
                    <td align="right">0.1</td>
                    <td align="right">10.7</td>
                    <td align="right">0.9</td>
                </tr>
                <tr>
                    <td align="center">6</td>
                    <td align="center">Pisco Mistral 35º</td>
                    <td align="right">9.3</td>
                    <td align="right">0.7</td>
                    <td align="right">8.4</td>
                    <td align="right">0.9</td>
                </tr>
                
            </tbody>
        </table>
        </div>
    </div>

	<br>
	<br>
	<!--Footer-->
		<footer class="app-footer">
        <div class="container">
          <p>Derechos Reservados @Diego</p>
        </div>
      </footer>
	<!--Fin Footer-->

</body>
</html>