<?php 
include("cabeza.php");
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
                <?php
                $conexion = mysqli_connect("localhost","root","","hospital2");               
               $lista="SELECT * FROM turnos_dados WHERE dni='$_SESSION[dni]'";
               $lista=mysqli_query($conexion,$lista);
               $busca=(mysqli_fetch_array($lista));//esto es el turno

               //ahora busca por codigo
               $lista2="SELECT * FROM horario_medico WHERE cod_turno=$busca[cod_turno]";
               $lista2=mysqli_query($conexion,$lista2);
               $busca2=(mysqli_fetch_array($lista2));

               //dame el nombre del medico
               $lista3="SELECT nombreyapellido,matricula FROM medicos WHERE matricula='$busca2[matricula]'";
               $lista3=mysqli_query($conexion,$lista3);
               $medico=(mysqli_fetch_array($lista3));
               //dame la profecion
               $lista4="SELECT nombre_especialidad FROM especialidades WHERE cod_especialidad='$medico[matricula]'";
               $listas=mysqli_query($conexion,$lista4);
               $profecion=(mysqli_fetch_array($listas));

               while ($busca=(mysqli_fetch_array($lista))){
                // Imprimimos todos los nombres de la tabla miagenda
                        echo '  <tr>
                        <td> # </td>
                        <td>  <a value='.$profecion["nombre_especialidad"].' > '.$profecion["nombre_especialidad"].' </a> </td>
                        <td> <a  value= '.$medico["nombreyapellido"].'> '.$medico["nombreyapellido"].' </a> </td>
                        <td class="Turnos_progress">
                            <div class="progress progress-sm">
                            </div>
                            <small  value='.$busca2["fecha"].' >     '.$busca2["fecha"].'     </small>
                        </td>
                        <td class="Turnos-state">
                            <span class="badge badge-success" value='.$busca2["hora"].' >'.$busca2["hora"].'</span>
                        </td>
                    <td  class="Turnos-actions text-right">
                    <a class="btn btn-danger btn-sm" href="elimina.php?id='.$busca["cod_turno"].'">
                        <i class="fas fa-trash">
                        </i> Delete
                    </a>
                </td>
                </tr>
                
                ';
 
                //ahora busca por codigo
                $lista2="SELECT * FROM horario_medico WHERE cod_turno=$busca[cod_turno]";
                $lista2=mysqli_query($conexion,$lista2);
                $busca2=(mysqli_fetch_array($lista2));
 
                //dame el nombre del medico
                $lista3="SELECT nombreyapellido,matricula FROM medicos WHERE matricula='$busca2[matricula]'";
                $lista3=mysqli_query($conexion,$lista3);
                $medico=(mysqli_fetch_array($lista3));
                //dame la profecion
                $lista4="SELECT nombre_especialidad FROM especialidades WHERE cod_especialidad='$medico[matricula]'";
                $listas=mysqli_query($conexion,$lista4);
                $profecion=(mysqli_fetch_array($listas));
                
        }


                
                
                
                
                ?>







                 
                   
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


