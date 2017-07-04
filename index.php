<!DOCTYPE html>
<html lang="es-ES">
	<head>
		<meta charset="UTF-8">
		<title>RCTEG</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  	<div class="container-fluid">
		    		<div class="navbar-header">
		      			<a class="navbar-brand" href="index.php">RCTEG</a>
		    		</div>
		    	<ul class="nav navbar-nav">
		    		<li><a href="index.php?var=reg">Registrar trabajador</a></li>
		    		<li><a href="index.php?var=lis">Lista de trabajadores</a></li>
		    	</ul>
		  	</div>
		</nav>
		<?php 
		if (isset($_GET["var"])) {
			$var= $_GET["var"];
			if($var=="reg"){
				include "registro.php";
			}
			elseif($var=="lis"){
				include "verTrabajadores.php";
			}
		}
			
		 ?>		 	
		<footer class="panel-footer" style="background-color: #222; color: gray; border-color: #080808; margin-top: 12px; "><p style="text-align: center;">RCTEG 0.0.1</p></footer>
	</body>
</html>