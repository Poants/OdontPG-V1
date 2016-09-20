
<?php
include 'connect_db.php';


if(!empty($_POST['btn-update']))
{
if(empty($_POST["Med_Nombre"]))
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



$sql = " UPDATE medico 
		set Med_Nombre=\"$_POST['$nombre']\",Med_Apellido=\"$_POST['$apellido']\", ed_Documento=\"$_POST['$document']\",Med_Tipo_Docu=\"$_POST['$tipodocu']\",Med_Telefono=\"$_POST['$telefono']\",Med_Direccion=\"$_POST['$direcci']\",Med_Genero=\"$_POST['$genero']\",Med_Eps=\"$_POST['$eps']\", Med_localidad=\"$_POST['$localid']\",Med_coment=\"$_POST['$comentar']\"
         where MedID=".$_POST['MedID'];
			$query = $mysqli->query($sql);
			if($query != null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../med_tableMedicos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../med_tableMedicos.php';</script>";

}

	


?>

