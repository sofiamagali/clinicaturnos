<?php 
include("cabeza.html");
?>


<?php 
$conexion = mysqli_connect("localhost","root","","hospital2");

if(isset($_SESSION['dni'])&&(isset($_SESSION['contraseña']))){
    $dni=$_SESSION['dni'];
    $contra=$_SESSION['contraseña'];
    $lista="SELECT dni,contraseña FROM pacientes WHERE dni=$dni AND contraseña=$contra";
    $lista=mysqli_query($conexion,$lista);
   
    $verifica=(mysqli_fetch_array($lista));

    if(($verifica['dni'] == $dni)&&($verifica['contraseña'] == $contra)){



    }



}


?>
<!-- Main content -->
<section class="container">
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Mis Turnos</h3>
            
                              
                            
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
            </div>
        </div>
        <a class="btn btn-light" href="agregarTurno.php">
                                        <i class="fas fa-address-card">
                                              </i> Agregar Turno
                                    </a>
        <div class="card-body p-0">
            <table class="table table-striped turnos">
                <tbody>
                    <tr>
                        <td> # </td>
                        <td>  <a> Clinico </a> </td>
                        <td> <a> Juan Perez </a> </td>
                        <td class="Turnos_progress">
                            <div class="progress progress-sm">
                            </div>
                            <small>   10/5/2021        </small>
                        </td>
                        <td class="Turnos-state">
                            <span class="badge badge-success">10:30</span>
                        </td>
                        <td class="Turnos-actions text-right">
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                  </i> Delete
                            </a>
                        </td>
                    </tr>
                   
        </div>
        <!-- /.card -->
    </div>
    </section>
</section>
<!-- /.content -->
</div>
</body>





<?php 
include("footer.html");



?>


