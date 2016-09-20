 <?php

include 'connect_db.php';

//echo "*".$_POST['btn-save']."*";


if (!empty($_POST ['btn-save']))
{	
if(empty($_POST['Pac_nombre'])){	
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


$sql = "INSERT INTO pacientes(Pac_nombre,Pac_apellidos,Pac_edad,Pac_telefono,Pac_eps,Pac_direccion,Pac_localidad,Pac_doc,Pac_Tipodoc,Pac_Genero,Pac_coment) VALUES('$nombre','$apellido','$edad','$telefono','$eps','$direcci','$ciudad','$document','$tipodocu','$genero','$comentar')"; 
	
	//die("Error: <br><br>".$sql);

	$query = $mysqli->query($sql);
		if($query != null){
					print "<script>alert(\"Agregado exitosamente".$mysqli->insert_id.".\");window.location='Pac_editar.php?PacID=".$mysqli->insert_id."';</script>";
				//print "<script>alert(\"Agregado exitosamente.\");window.location='../pac_tablePacientes.php';</script>";
			}else{
				//print "Error: <br><br>".$sql;
				//die("Error: <br><br>". $mysqli->error);
				print "<script>alert(\"No se pudo agregar.\");window.location='../paciente.php';</script>";

			}
  
}else{
	header('Location: paciente.php?msj=456');
}

?>