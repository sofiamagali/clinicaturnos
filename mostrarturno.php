<?php 
include("cabeza.php");
?>


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Turno nuevo </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Turno a confirmar:</label>
                               

<?php
$fecha = $_GET["fecha"];
echo '<h5 name="fecha">Usted eligio su turno el dia :'.$fecha.'</h5><br>';

$hora = $_GET["hora"];
echo '<h5 name"horario" >En el horario: '.$hora.'</h5>';
//busco donde agregarlo 
$conexion = mysqli_connect("localhost","root","","hospital2");

$lista="SELECT * FROM horario_medico WHERE fecha='$fecha' and hora='$hora'";
$lista=mysqli_query($conexion,$lista);
$turno=(mysqli_fetch_array($lista));

if(isset($_GET["fecha"])&&(isset($_GET["hora"]))){
  $modifica=" UPDATE `horario_medico` SET `disponible`='n' where fecha='$fecha' and hora='$hora'";//agrega en horario medico
  $lista=mysqli_query($conexion,$modifica);

  //sacar el dni de la sesion 
  $dni=$_SESSION['dni'];
  echo $dni;
  echo $turno['cod_turno'];
  $turnodado= "INSERT INTO `turnos_dados`(`dni`, `cod_turno`, `cancelado`, `asistido`) VALUES ('$dni','$turno[cod_turno]','n','n')";
  $lista2=mysqli_query($conexion,$turnodado);

  echo '<div class="card-body">
  <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
    Turno agregado correctamente.
  </div> 
</div>';
}
else{
  echo '<div class="card-body">
      <div class="alert alert-danger alert-dismissible">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
        Error al agregar el turno,intentelo nuevamente.
      </div> 
    </div>';
}

?>
      
     

      </div>
                                </div>
                            </div>
                        </div>
                </div>
<?php
include("footer.html");
?>