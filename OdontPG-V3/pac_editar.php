<html>
	<head>

	<meta charset="utf-8">
    <title>Centro odontologico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="adonpg">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

		<div class="navbar">
 			<div class="navbar-inner">
			<div class="container">
	 		<div class="nav-collapse">
			<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
			 
	
			</ul>
			<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
			</form>
			<ul class="nav pull-right">
		 	<li><a href="paciente.php"> Pacientes </a></li>	
		  	<li><a href="medico.php"> Medicos </a></li>
            <li><a href="cita.php"> Cita </a></li>				  
		<!-- <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>-->
			  <li><a href="desconectar.php"> Cerrar Cesion </a></li>			 
			</ul>
	  		</div><!-- /.nav-collapse -->
			</div>
  			</div><!-- /navbar-inner -->
			</div>

<!-- ------------ -->
	
		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "pac_navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<center><h2>Actualizar Datos </h2></center>


<?php include "pac_formu_medico.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>