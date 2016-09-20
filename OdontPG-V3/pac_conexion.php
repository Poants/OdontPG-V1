<?php

require("connect_db.php");
	
if (!isset($pac))
{
	$codigo=$_POST['']:
	$nombre=$_POST['Pac_nombre'];
        $apellido=$_POST['Pac_apellidos'];
        $edad=$_POST['Pac_edad'];
        $telefono=$_POST['Pac_telefono'];
        $eps=$_POST['Pac_eps'];
        $direccion=$_POST['Pac_direccion'];
        $localidad=$_POST['Pac_localidad']; 
        $doc=$_POST['Pac_doc'];
        $tipodoc=$_POST['Pac_Tipodoc'];
        $genero=$_POST['Pac_Genero'];
   
	
	           
                mysqli_query($mysqli,"INSERT INTO pacientes VALUES('','Pac_nombre','Pac_apellidos','Pac_edad','Pac_telefono','Pac_eps','Pac_direccion','Pac_localidad','Pac_doc','Pac_doc','Pac_Tipodoc','Pac_Genero','Pac_coment')");
                echo ' <script language="javascript">alert("Paciente registrado con éxito");</script> ';                  

}             


                 

?>