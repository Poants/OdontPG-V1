<?php
include 'connect_db.php';


if(!empty($_POST['btn-update']))
{
if(empty($_POST["Pac_nombre"]))
	header('Location: paciente.php?msj=123');
}
echo $_POST['Pac_nombre'];
$nombre=$_POST['Pac_nombre'];
$apellido=$_POST['Pac_apellidos']; 
$edad=$_POST['Pac_edad'];
$telefono=$_POST['Pac_telefono']; 
$eps=$_POST['Pac_eps']; 
$direcci=$_POST['Pac_direccion'];
$ciudad=$_POST['Pac_localidad']; 
$document=$_POST['Pac_doc']; 
$tipodocu=$_POST['Pac_Tipodoc'];
$genero=$_POST['Pac_Genero']; 
$comentar=$_POST['Pac_coment'];

$sql = " UPDATE medico 
		set Pac_nombre=\"$nombre\", Pac_apellidos=\"$apellido\", Pac_edad=\"$edad\", Pac_doc=\"$document\", Pac_Tipodoc=\"$tipodocu\",Pac_telefono=\"$telefono\",Pac_direccion=\"$direcci\",Pac_Genero=\"$genero\",Pac_eps=\"$eps\",Pac_localidad=\"$ciudad\",Pac_coment=\"$comentar\" where PacID=".$_POST['PacID'];
			$query = $mysqli->query($sql);
			if($query != null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='pac_ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='pac_tablaPacientes.php';</script>";



		//die("PRUEBA *\"CARLOS\"*");
		//, ed_Documento=\"$_POST['$document']\",Med_Tipo_Docu=\"$_POST['$tipodocu']\",Med_Telefono=\"$_POST['$telefono']\",Med_Direccion=\"$_POST['$direcci']\",Med_Genero=\"$_POST['$genero']\",Med_Eps=\"$_POST['$eps']\", Med_localidad=\"$_POST['$localid']\",Med_coment=\"$_POST['$comentar']\" 

			
			//die("ERROR MYSQL:".$mysqli->error);
			
}

	


?>