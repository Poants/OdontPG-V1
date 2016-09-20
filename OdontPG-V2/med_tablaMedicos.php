	<?php
include "connect_db.php";
/*include "med_conexion.php";*/
	

$user_id=null;
$sql1="select * from medico";
$query = $mysqli->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table></table>le class="table table-bordered table-hover">
<thead>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Gerero</th>
	<th>Documento</th>
	<th>Tipo.Doc</th>
	<th>Eps</th>
	<th>Telefono</th>
	<th>Direccion</th>
	<th>Ciudad</th>
	<th>Comentarios</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>

	<td><?php echo $r["Med_Nombre"]; ?></td>
	<td><?php echo $r["Med_Apellido"]; ?></td>
	<td><?php echo $r["Med_Genero"]; ?></td>
	<td><?php echo $r["Med_Documento"]; ?></td>
	<td><?php echo $r["Med_Tipo_Docu"]; ?></td>
    <td><?php echo $r["Med_Eps"]; ?></td>
    <td><?php echo $r["Med_Telefono"]; ?></td>
    <td><?php echo $r["Med_Direccion"]; ?></td>
    <td><?php echo $r["Med_localidad"]; ?></td>
    <td><?php echo $r["Med_coment"]; ?></td>
	<td style="width:150px;">
		<a href="./med_editar.php?MedID=<?php echo $r["MedID"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" MedID="del-<?php echo $r["MedID"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["MedID"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="med_eliminar.php?MedID="+<?php echo $r["MedID"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>


http://people.cs.ksu.edu/~hankley/d764/tut06/GopisettyPHP.html