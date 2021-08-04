<?php

session_start(); 

$conexion = mysqli_connect("localhost","root","","hospital2");//root por defecto y luego va la contraseña no se completa 

if(mysqli_connect_errno()){
    echo "error";
    echo "<br>";


}else {
    echo "se conecto  ";
    echo "<br>";

}

$conexion = mysqli_connect("localhost","root","","hospital2");

if(isset($_SESSION['dni'])&&(isset($_SESSION['contraseña']))){
    $dni=$_SESSION['dni'];
    $contra=$_SESSION['contraseña'];
    $lista="SELECT dni,contraseña FROM pacientes WHERE dni=$dni AND contraseña=$contra";
    $lista=mysqli_query($conexion,$lista);
   
    $verifica=(mysqli_fetch_array($lista));

    if(($verifica['dni'] == $dni)&&($verifica['contraseña'] == $contra)){
        header("location : turnos.php");
    }

    else{
        echo '<div class="card-body">
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
          Error en Usuario o contraseña.
        </div> 
      </div>';
    }


}


?>
