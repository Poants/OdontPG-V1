<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>
<html lang="es">
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
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
 	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->

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

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Medico </h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>DATOS BASICOS</h4>
		<div class="row-fluid">
                             <CENTER>
                            <TABLE BORDER>

                            <TR>
                           <TD>Nombre:</TD>
                           <TD> <INPUT TYPE="text" NAME="nombre" SIZE=18 MAXLENGTH=18> Apellido: 
                           <INPUT TYPE="text" NAME="apellidos" SIZE=48 MAXLENGTH=48></TD>
						   
                           <TR>
                           <TD>Documento:</TD>
                           <TD> <INPUT TYPE="text" NAME="edad" SIZE=8 MAXLENGTH=8>Tipo.Doc: 
                           <SELECT NAME="OPCION">
                           <OPTION>OPCION 1
                           <OPTION>OPCION 2
                           <OPTION>OPCION 3
                           <OPTION>OPCION 4
                           <OPTION>OPCION 5

                           </SELECT></TD>


                           <TR>
                           <TD>Telefono:</TD>
                           <TD> <INPUT TYPE="text" NAME="domicilio" SIZE=48 MAXLENGTH=48></TD>

                           <TR>
                           <TD>Direccion:</TD>
                           <TD> <INPUT TYPE="text" NAME="postal" SIZE=5 MAXLENGTH=5>Ciudad:
                           <INPUT TYPE="text" NAME="localidad" SIZE=36 MAXLENGTH=36></TD>

                           <TR>
                           <TD>Comentarios<BR> personales:</TD>
                           <TD> <TEXTAREA NAME="coment" ROWS=2 COLS=48></TEXTAREA></TD>

                           <TR>
                           <TD><B>Pulse aqui:</B></TD>
                           <TD ALIGN=CENTER>
                             <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
                           </TD>

                  </TABLE>
              </CENTER>
             </FORM>

	       </div><!-- fin contenedor -->
    </div><!--fin envoltura-->



			  			  
			  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright ODONTPG <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>