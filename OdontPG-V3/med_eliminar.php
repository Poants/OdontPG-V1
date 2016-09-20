	<?php

if(!empty($_GET)){
			include "connect_db.php";
			/*	
		    include "med_conexion.php";*/
			
			$sql = "DELETE FROM medico WHERE MedID=".$_GET["MedID"];
			$query = $mysqli->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../med_ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../med_ver.php';</script>";

			}
}

?>	