<!--php

$tabla_db1 = "paciente";

error_reporting(0);

$conexion = new mysqli_connect($servername, $username, $password, $dbname);


if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

?-->

<?php
   $nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$edad=$_POST['edad'];
	$telefono=$_POST['telefono'];
	$eps=$_POST['eps'];
	$direccion=$_POST['direccion'];
	$localidad=$_POST['localidad'];
	$doc=$_POST['doc'];
	$rdoc=$_POST['rdoc'];
	
	
	

                require("connect_db.php");
                        mysqli_query($mysqli,"INSERT INTO login VALUES('','$doc','$nombre','$apellido')");
                 echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';                  

                                   

?>