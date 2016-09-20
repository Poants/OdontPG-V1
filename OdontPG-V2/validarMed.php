
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");
	require("med_conexion.php");


		$codigo=$_POST['']:
		$nombre=$_POST['Med_Nombre'];
        $apellido=$_POST['Med_Apellido'];
        $doc=$_POST['Med_Documento'];
        $tipodoc=$_POST['Med_Tipo_Docu'];
        $telefono=$_POST['Med_Telefono'];
        $direccion=$_POST['Med_Direccion'];	
        $genero=$_POST['Med_Genero'];
        $eps=$_POST['Med_Eps'];
        $localidad=$_POST['Med_localidad']; 
        $comentario=$_POST['Med_coment'];


	
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM medico WHERE Med_Documento='$doc'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){	
			$_SESSION['Med_Codigo']=$f2['Med_Codigo'];
			$_SESSION['Med_Nombre']=$f2['Med_Nombre'];
			$_SESSION['Med_Apellido']=$f2['Med_Apellido'];
			$_SESSION['Med_Documento']=$f2['Med_Documento'];
			$_SESSION['Med_Tipo_Docu']=$f2['Med_Tipo_Docu'];
			$_SESSION['Med_Telefono']=$f2['Med_Telefono'];
			$_SESSION['Med_Direccion']=$f2['Med_Direccion'];
			$_SESSION['Med_Genero']=$f2['Med_Genero'];
			$_SESSION['Med_Eps']=$f2['Med_Eps'];
			$_SESSION['Med_localidad']=$f2['Med_localidad'];
			$_SESSION['Med_coment']=$f2['Med_coment'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


/*/	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}*/

?>