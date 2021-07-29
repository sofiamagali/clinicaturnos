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
                        <h3 class="card-title">Turno nuevo </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="mostrarturno.php"  method="GET">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Horarios disponibles del profecional:</label>
                                       
                                     
<?php
$nombreyapellido = $_GET["nombreyapellido"];
$conexion = mysqli_connect("localhost","root","","hospital2");
 echo $nombreyapellido;

$lista="SELECT * FROM medicos WHERE nombreyapellido='$nombreyapellido'";
$lista=mysqli_query($conexion,$lista);

$medico=(mysqli_fetch_array($lista));

$diahoy= date("y-m-d");//dia de la fecha
$medicoelegido=$medico['matricula'];


if($medico['vigente']=='s'){
   
        $comprobar="SELECT * FROM horario_medico where matricula='$medicoelegido' AND fecha > '$diahoy' and disponible='s'";
        $comprobar=mysqli_query($conexion,$comprobar);
        $busca=(mysqli_fetch_array($comprobar));
        $fechaprimera=$busca['fecha'];//primera fecha 
        $horaprimera=$busca['hora'];//primer horario
        if($busca['disponible'] == 's' ){ //si encuentra 
            
            echo '<br> <input type="radio" name="fecha" value="">'.$busca["fecha"].'';
            echo '<p name="hora">'.$busca["hora"].'</p>';
            
            $comprobar="SELECT * FROM horario_medico where matricula='$medicoelegido' AND fecha > '$diahoy' and hora>'$horaprimera'";
            $comprobar=mysqli_query($conexion,$comprobar);
            $busca=(mysqli_fetch_array($comprobar));

            while(($busca['disponible']== 's')&&($busca['fecha']=$fechaprimera)&&(! empty($busca))){
                echo '<br> <input type="radio" name="fecha" value="">'.$busca["fecha"].'';
                echo '<p name="hora">'.$busca["hora"].'</p>';
                $comprobar="SELECT * FROM horario_medico where matricula='$medicoelegido' AND fecha = '$fechaprimera' and hora>'$horaprimera'";
                $comprobar=mysqli_query($conexion,$comprobar);
                $busca=(mysqli_fetch_array($comprobar));
                if(! empty($busca))
                    $horaprimera=$busca['hora'];
                
            }
        }
        else if(empty($busca)){
            echo "<h1> No hay turnos disponibles momentaneamente.</h1>";

        } 


        //quedamos a la espera de si se elije o no el turno mostrado en pantalla


    }
else echo '<p>medico no disponible momentaneamente,comuniquese al numero interno.</p>'

?>


        <div class="card-footer">
          <button type="sumbit" class="btn btn-primary" >selec </button>                                 
        </div>
                                    
        <div class="card-footer">
             <button  type="submit" class="btn btn-primary">Dia siguiente</button>
        </div>



                    </form>
                    </div>
                    </div>
                    </div>
 <?php 
include("footer.html");
?>