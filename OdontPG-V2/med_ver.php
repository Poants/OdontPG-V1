      <html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "med_navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>VER ENTRADAS</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">

<form role="form" method="post" action="med_agragar.php">

  <div class="form-group">
    <label for="Med_Nombre">Nombre:</label>
    <input type="text" class="form-control" name="Med_Nombre" required>
  </div>
  <div class="form-group">
    <label for="Med_Apellido">Apellido:</label>
    <input type="text" class="form-control" name="Med_Apellido" required>
  </div>
  <div class="form-group">
    <label for="Med_Genero">Gerero:</label>
    <input type="text" class="form-control" name="Med_Genero" required>
  </div>
  <div class="form-group">
    <label for="Med_Documento">Documento:</label>
    <input type="text" class="form-control"  name="Med_Documento" >
  </div>
  <div class="form-group">
    <label for="Med_Tipo_Docu">Tipo.Doc:</label>
    <input type="text" class="form-control"  name="Med_Tipo_Docu" >
  </div>
  <div class="form-group">
    <label for="Med_Eps">Eps:</label> 
    <input type="text" class="form-control"  name="Med_Eps" >
  </div>
  <div class="form-group">
    <label for="Med_Telefono">Telefono:</label>
    <input type="text" class="form-control"  name="Med_Telefono" >
  </div>
  <div class="form-group">
    <label for="Med_Direccion">Direccion:</label>
    <input type="text" class="form-control"  name="Med_Direccion" >
  </div>
  <div class="form-group">
    <label for="Med_localidad">Ciudad:</label>
    <input type="text" class="form-control"  name="Med_localidad" >
  </div>
  <div class="form-group">
    <label for="Med_coment">Comentarios:</label>
    <input type="text" class="form-control"  name="Med_coment" >
  </div>


  <button type="submit" class="btn btn-default">Agregar</button>
</form>
  
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "med_tablaMedicos.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>