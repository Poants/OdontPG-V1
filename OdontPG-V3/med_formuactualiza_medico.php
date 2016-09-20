<!DOCTYPE html>
<?php
/*
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:index2.php");
}
*/
include ("connect_db.php");
/*include ("med_conexion.php");*/
$medID=$_GET['MedID'];
$user_id=null;
$sql1= "select * from medico where MedID = ".$medID;
$query = $mysqli->query($sql1);
$medico = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $medico=$r;
  break;
}

  }
?>


<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Centro odontologico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="adonpg">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/zz.png" style="background-attachment: fixed">
<div class="container">
<header class="header">
</header>

  <!-- Navbar
    ================================================== -->


<!-- ======================================================================================================================== -->
<div class="row">
  <div class="span12">

    <div class="caption">
    
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">  
    <h2> Medico </h2> 

   
  <div class="container">
  <div class="row">
  <div class="col-md-12">
   <!--//<h2> &amp; </h2>/////////////////-->   
      <p class="lead"></p>
          

  </div>
  </div>
  </div>

    <div class="well well-small">
    <hr class="soft"/>
    <h4>DATOS A REGISTRAR</h4>
    <div class="row-fluid">
    <form action="med_actualizar.php" method="post">
        <?php if($medico!=null):?>
        <CENTER>        
                <TABLE BORDER>                
                 <TR>
                 <TD>Nombre:</TD>
                 <TD><input type="text" class="form-control" value="<?php echo $medico->Med_Nombre; ?>" name="Med_Nombre" > Apellido: 
                 <input type="text" class="form-control" value="<?php echo $medico->Med_Apellido; ?>" name="Med_Apellido"  SIZE=18 MAXLENGTH=18>
                  Gerero:
                  <SELECT NAME="Med_Genero" value="<?php echo $medico->Med_Genero; ?>" >
                  <OPTION>Femenino</OPTION>
                  <OPTION>Masculino</OPTION>
                  </SELECT></TD>
               
                  <TR>
                  <TD>Documento:</TD>
                  <TD>
                  <input type="text" class="form-control" value="<?php echo $medico->Med_Documento; ?>" name="Med_Documento"  MAXLENGTH=8 >
                  Tipo.Doc: 
                  <SELECT NAME="Med_Tipo_Docu" class="form-control" value="<?php echo $medico->Med_Tipo_Docu; ?>">
                  <OPTION>RC</OPTION>
                  <OPTION>TI</OPTION>                        
                  <OPTION>CC</OPTION>
                  </SELECT>
                  Eps: 
                  <input type="text" class="form-control" value="<?php echo $medico->Med_Eps; ?>" name="Med_Eps" size=20 >
                  </TD>
                  <TR>
                  <TD>Telefono:</TD>
                  <TD> <input type="text" class="form-control" size=8 maxlength=18 value="<?php echo $medico->Med_Telefono; ?>" name="Med_Telefono">
                    Direccion:<input type="text" class="form-control" size=15 maxlength=15 value="<?php echo $medico->Med_Direccion; ?>" name="Med_Direccion" >
                  Ciudad:
                  <input type="text" class="form-control" size=36 maxlength=36 value="<?php echo $medico->Med_localidad; ?>" name="Med_localidad" >
                      </TD>
                      <TR>
                      <TD>Comentarios<BR> personales:</TD>
                      <TD><TEXTAREA name="Med_coment" ROWS=2 COLS=48 class="form-control" value="<?php echo $medico->Med_coment; ?>" ></TEXTAREA></TD>
                      <TR>
                      <TD><B>Pulse aqui:</B></TD>
                      <TD ALIGN=CENTER>
                      <input type="hidden" name="MedID" value="<?php echo $medico->MedID; ?>">
                      <button type="submit" name="btn-update" value="actualiza_medico" class="btn btn-sm btn-danger"><strong>Guardar</strong></button>
                      <!-- <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/> -->
                          </TD>
                  </TABLE>
              </CENTER>
              <?php else:?>
                  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
             </form>        

             <?php
                if(isset($_POST['submit'])){
                require("med_agregar.php");
                 }

             ?>
              
                   </div><!-- fin contenedor -->
    </div><!--fin envoltura-->

<!--     -->
    
    
    <div class="span8">
    
    </div>  
    </div>  
    <br/>
    
    <!--EMPIEZA DESLIZABLE-->   
     <!--TERMINA DESLIZABLE-->
    
    </div>
<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

  </div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright ODONTPG <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </style>



  </body>
</html>