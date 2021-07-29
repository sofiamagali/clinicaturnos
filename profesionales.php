<?php 
include("cabeza.html");
?>

</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Profesionales Disponibles</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Profesional</th>
                                    <th>Especialidad</th>
                                    <th>Obras sociales</th>
                                    <th>Dias</th>
                                    <th>Horario</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $conexion = mysqli_connect("localhost","root","","hospital2");
                                $pase="SELECT * FROM medicos";
                                $lista=mysqli_query($conexion,$pase);

                                $medico=(mysqli_fetch_array($lista));
                                    $i=1;
                                while($i<8){
                                
                                        $lista="SELECT * FROM medicos where matricula=$i";
                                    
                                    
                                        $i++;

                                $lista=mysqli_query($conexion,$lista);

                                $medico=(mysqli_fetch_array($lista));

                                $especialidadmedico="SELECT nombre_especialidad FROM especialidades where cod_especialidad=$medico[cod_especialidad]";
                                $especialidad=mysqli_query($conexion,$especialidadmedico);
                                $nomespecialidad=(mysqli_fetch_array($especialidad));


                                if($medico['matricula'] == 1) {
                                    $dias='Lunes';
                                    $hora='12:00-15:00';
                                
                                }
                                if ($medico['matricula'] == 2) {
                                    $dias='Martes';
                                  $hora='12:00-15:00';
                                
                                }
                                if ($medico['matricula'] == 3) {
                                    $dias='Miercoles';
                                  $hora='12:00-15:00';
                                
                                }
                                if ($medico['matricula'] == 4) {
                                    $dias='Jueves';
                                    $hora='12:00-15:00';
                                
                                }
                                if ($medico['matricula'] == 5) {
                                    $dias='Viernes';
                                    $hora='12:00-15:00';
                                
                                }

                                if ($medico['matricula'] == 6)  {
                                    $dias='Sabado';
                                     $hora='12:00-15:00';
                                
                                }
                                if($medico['matricula'] == 7){
                                $dias='Domingo';
                                $hora='12:00-15:00';
                                }
                               
                                echo '<tr><td>'.$medico["nombreyapellido"].'</td>
                                <td>'.$nomespecialidad['nombre_especialidad']. '</td>
                                <td>Ioma,Ospe</td>
                                <td>'.$dias. '</td>
                                <td>'.$hora.'</td></tr>';
                                
                                $pase="SELECT * FROM medicos";
                                $lista=mysqli_query($conexion,$pase);

                                $medico=(mysqli_fetch_array($lista));

                                }

                                ?>
                                
                                

                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php include("footer.html"); ?> 
