<?php
include "connect_db.php";
/*
include "med_conexion.php";*/

$user_id=null;
$sql1= "select * from pacientes where Pac_nombre like '%$_GET[s]%' or Pac_apellidos like '%$_GET[s]%' or Pac_edad like '%$_GET[s]%' or Pac_telefono like '%$_GET[s]%' or Pac_eps like '%$_GET[s]%'or Pac_direccion like '%$_GET[s]%'or Pac_localidad like '%$_GET[s]%'or Pac_doc like '%$_GET[s]%'or Pac_Tipodoc like '%$_GET[s]%'or Pac_Genero like '%$_GET[s]%' or Pac_coment like '%$_GET%' ";
$query = $mysqli->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Modificar</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Edad</th>
	<th>Documento</th>
	<th>Tipo Docu</th>
	<th>Eps</th>
	<th>Telefono</th>
	<th>Gerero</th>	
	<th>Direccion</th>
	<th>Eps</th>	
	<th>Ciudad</th>
	<th>Comentarios</th>
	
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>	
	<td style="width:150px;">
		<a href="./pac_editar.php?PacID=<?php echo $r["PacID"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" PacID="del-<?php echo $r["PacID"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["PacID"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./pac_eliminar.php?PacID="+<?php echo $r["PacID"];?>;

			}

		});
		</script>
	</td>

	<td><?php echo $r["Pac_nombre"]; ?></td>
	<td><?php echo $r["Pac_apellidos"]; ?></td>
	<td><?php echo $r["Pac_edad"]; ?></td>
	<td><?php echo $r["Pac_telefono"]; ?></td>
	<td><?php echo $r["Pac_eps"]; ?></td>
	<td><?php echo $r["Pac_direccion"]; ?></td>
	<td><?php echo $r["Pac_localidad"]; ?></td>
	<td><?php echo $r["Pac_doc"]; ?></td>
	<td><?php echo $r["Pac_Tipodoc"]; ?></td>
	<td><?php echo $r["Pac_Genero"]; ?></td>
	<td><?php echo $r["Pac_coment"]; ?></td>
	</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>