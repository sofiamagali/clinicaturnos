<?php 
include("cabeza.html");
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
                        <h3 class="card-title">Nuevo Turno </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="buscarturno.php"  method="GET">

                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div  class="form-group">
                                        <label>Seleccione Profesional</label>
                                        <select  name="nombreyapellido" class="form-control">

                                            <?php 
                                                $conexion = mysqli_connect("localhost","root","","hospital2"); 
                                                $list="SELECT nombreyapellido FROM medicos";
                                                $lista=mysqli_query($conexion,$list); 


                                                while($fila=mysqli_fetch_array($lista)){
                                                    echo '<option  value="'.$fila['nombreyapellido'].'">'.$fila['nombreyapellido'].'</option>';
                                                } 


                                            ?> 
                                         </select>
                                    
                                          <!-- /.card-body -->
                                            <div class="card-footer">
                                            <button type="sumbit" class="btn btn-primary" >Buscar turnos  </button>                                    
                                            </div>
                                         

                    </form>
                    </div>
                    </div>
                    </div>
                   <?php 
include("footer.html");



?>