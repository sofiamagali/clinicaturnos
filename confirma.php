
<?php 
include("cabeza.php");

$fecha=$_POST["fecha"];
$hora=$_POST["hora"];

if(isset($_POST["fecha"])){
    $modifica=" UPDATE `horario_medico` SET `disponible`='n' where fecha='$fecha' and hora='$hora'";//agrega en horario medico
    //sacar el dni de la sesion 
    $dni=$_SESSION['dni'];
    $turnodado= "INSERT INTO `turnos_dados`(`dni`, `cod_turno`, `cancelado`, `asistido`) VALUES ('$dni','$turno[cod_turno],'n','n')";
    echo '<div class="card-body">
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-ban"></i> Alert!</h5>
      Turno agregado correctamente.
    </div> 
  </div>';
}
else{
    echo '<div class="card-body">
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
          Error al agregar el turno,intentelo nuevamente.
        </div> 
      </div>';
}


include("footer.html");

?>