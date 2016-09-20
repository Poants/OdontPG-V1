<?php
include "connect_db.php";
/*
include "med_conexion.php";*/

$user_id=null;
$sql1= "select * from medico where Med_Nombre like '%$_GET[s]%' or Med_Apellido like '%$_GET[s]%' or Med_Documento like '%$_GET[s]%' or Med_Tipo_Docu like '%$_GET[s]%' or Med_Telefono like '%$_GET[s]%'or Med_Direccion like '%$_GET[s]%'or Med_Genero like '%$_GET[s]%'or Med_Eps like '%$_GET[s]%'or Med_localidad like '%$_GET[s]%'or Med_coment like '%$_GET[s]%' ";
$query = $mysqli->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Modificar</th>
	<th>Nombre:</th>
	<th>Apellido:</th>
	<th>Gerero:</th>
	<th>Documento:</th>
	<th>Tipo Docu:</th>
	<th>Eps:</th>	
	<th>Telefono:</th>
	<th>Direccion:</th>
	<th>Ciudad:</th>
	<th>Comentarios:</th>
	
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>	
	<td style="width:150px;">
		<a href="./med_editar.php?MedID=<?php echo $r["MedID"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" MedID="del-<?php echo $r["MedID"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["MedID"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./med_eliminar.php?MedID="+<?php echo $r["MedID"];?>;

			}

		});
		</script>
	</td>

	<td><?php echo $r["Med_Nombre"]; ?></td>
	<td><?php echo $r["Med_Apellido"]; ?></td>
	<td><?php echo $r["Med_Documento"]; ?></td>
	<td><?php echo $r["Med_Tipo_Docu"]; ?></td>
	<td><?php echo $r["Med_Telefono"]; ?></td>
	<td><?php echo $r["Med_Direccion"]; ?></td>
	<td><?php echo $r["Med_Genero"]; ?></td>
	<td><?php echo $r["Med_Eps"]; ?></td>
	<td><?php echo $r["Med_localidad"]; ?></td>
	<td><?php echo $r["Med_coment"]; ?></td>
	</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>