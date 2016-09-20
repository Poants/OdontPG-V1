 <?php

include 'connect_db.php';

//echo "*".$_POST['btn-save']."*";


if (!empty($_POST ['btn-save']))
{	
if(empty($_POST['Med_Nombre'])){	
	header('Location: medico.php?msj=123');
}
echo $_POST['Med_Nombre'];
$nombre=$_POST['Med_Nombre'];
$apellido=$_POST['Med_Apellido']; 
$document=$_POST['Med_Documento']; 
$tipodocu=$_POST['Med_Tipo_Docu']; 
$telefono=$_POST['Med_Telefono'];
$direcci=$_POST['Med_Direccion']; 
$genero=$_POST['Med_Genero']; 
$eps=$_POST['Med_Eps'];
$localid=$_POST['Med_localidad']; 
$comentar=$_POST['Med_coment'];




$sql = "INSERT INTO medico(Med_Nombre,Med_Apellido,Med_Documento,Med_Tipo_Docu,Med_Telefono,Med_Direccion,Med_Genero,Med_Eps,Med_localidad,Med_coment) VALUES('$nombre','$apellido','$document','$tipodocu','$telefono','$direcci','$genero','$eps','$localid','$comentar')"; 
	
	//die("Error: <br><br>".$sql);

	$query = $mysqli->query($sql);
		if($query != null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../med_tableMedicos.php';</script>";
			}else{
				//print "Error: <br><br>".$sql;
				//die("Error: <br><br>". $mysqli->error);
				print "<script>alert(\"No se pudo agregar.\");window.location='../medico.php';</script>";

			}
  
}else{
	header('Location: medico.php?msj=456');
}

/*
if(!empty($_POST)){
	if(isset($_POST["Med_Nombre"]) &&isset($_POST["Med_Apellido"]) &&isset($_POST["Med_Documento"]) &&isset($_POST["Med_Tipo_Docu"]) &&isset($_POST["Med_Telefono"]) &&isset($_POST["Med_Direccion"]) &&isset($_POST["Med_Genero"])		&&isset($_POST["Med_Eps"]) &&isset($_POST["Med_localidad"]) &&isset($_POST["Med_coment"])){

		if($_POST["Med_Nombre"]!=""	&&$_POST["Med_Apellido"]!="" &&$_POST["Med_Direccion"]!=""){
			include "connect_db.php";

$sql ="insert into medico(Med_Nombre,Med_Apellido,Med_Documento,Med_Tipo_Docu,Med_Telefono,Med_Direccion,Med_Genero,Med_Eps,Med_localidad,Med_coment) VALUE(\"$_POST[Med_Nombre]\",\"$_POST[Med_Apellido]\",\"$_POST[Med_Documento]\",\"$_POST[Med_Tipo_Docu]\",\"$_POST[Med_Telefono]\",\"$_POST[Med_Direccion]\",\"$_POST[Med_Genero]\",\"$_POST[Med_Eps]\",\"$_POST[Med_localidad]\",\"$_POST[Med_coment]\" )"; 
	$query = $mysqli->query($sql);
	if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../med_ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../med_ver.php';</script>";

			}	
		}
	}
}
*/
?>










