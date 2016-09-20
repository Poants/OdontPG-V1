<?php
include ("connect_db.php");
/*include ("med_conexion.php");*/

$user_id=null;
$sql1= "select * from medico where MedID = ".$_GET["MedID"];
$query = $mysqli->query($sql1);
$medico = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $medico=$r;
  break;
}

  }
?>

<?php if($medico!=null):?>

<center><div id="formularoactualiza">

<form role="form" method="post" action="med_actualizar.php">

  <div class="form-group">
    <label style="font-size: 14pt" for="Med_Nombre">Nombres:</label>
    <input type="text" class="form-control" value="<?php echo $medico->Med_Nombre; ?>" name="Med_Nombre" required>
  </div>

  <div class="form-group">
    <label style="font-size: 14pt" for="Med_Apellido">Apellidos:</label>
    <input type="text" class="form-control" value="<?php echo $medico->Med_Apellido; ?>" name="Med_Apellido" required>
  </div>
  <div class="form-group">
    <label style="font-size: 14pt" for="Med_Genero">Gerero:</label>
    <input type="text" class="form-control" value="<?php echo $medico->Med_Genero; ?>" name="Med_Genero" required>
  </div>
  <div class="form-group">
    <label style="font-size: 14pt" for="Med_Documento">Documento:</label>
    <input type="text" class="form-control" value="<?php echo $medico->Med_Documento; ?>" name="Med_Documento" >
  </div>
  <div class="form-group">
    <label style="font-size: 14pt" for="Med_Tipo_Docu">Tipo de Documento:</label>
    <input type="text" class="form-control" value="<?php echo $medico->Med_Tipo_Docu; ?>" name="Med_Tipo_Docu" >
  </div>
  <div class="form-group">
    <label style="font-size: 14pt" for="Med_Eps">Eps:</label> 
    <input type="text" class="form-control" value="<?php echo $medico->Med_Eps; ?>" name="Med_Eps" >
  </div>
  <div class="form-group">
    <label style="font-size: 14pt" for="Med_Telefono">Telefono:</label>
    <input type="text" class="form-control" value="<?php echo $medico->Med_Telefono; ?>" name="Med_Telefono" >
  </div>
  <div class="form-group">
    <label style="font-size: 14pt" for="Med_Direccion">Direccion:</label>
    <input type="text" class="form-control" value="<?php echo $medico->Med_Direccion; ?>" name="Med_Direccion" >
  </div>
  <div class="form-group">
    <label style="font-size: 14pt" for="Med_localidad">Ciudad:</label>
    <input type="text" class="form-control" value="<?php echo $medico->Med_localidad; ?>" name="Med_localidad" >
  </div>
  <div class="form-group">
    <label style="font-size: 14pt" for="Med_coment">Comentarios:</label>
    <input type="text" class="form-control" value="<?php echo $medico->Med_coment; ?>" name="Med_coment"  >
  </div>
<input type="hidden" name="MedID" value="<?php echo $medico->MedID; ?>">

  <button type="submit" name="btn-update" value="actualiza_medico" class="btn btn-default"><strong>Actualizar</strong></button>
 
</form>
</div></center>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>