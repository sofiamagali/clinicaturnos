<?php
session_start(); 
$conexion = mysqli_connect("localhost","root","","hospital2");


if(isset($_GET["mail"])){
$modifica="UPDATE pacientes SET   mail='$_GET[mail]'  WHERE dni='$_SESSION[dni];'";
$lista=mysqli_query($conexion,$modifica);

}
//
if(isset($_GET["direccion"])){
    $modifica="UPDATE pacientes SET   direccion='$_GET[direccion]'  WHERE dni='$_SESSION[dni];'";
    $lista=mysqli_query($conexion,$modifica);
    
    }

//
if(isset($_GET["sexo"])){
    $modifica="UPDATE pacientes SET   sexo='$_GET[sexo]'  WHERE dni='$_SESSION[dni];'";
    $lista=mysqli_query($conexion,$modifica);
    
    }
    //
    if(isset($_GET["telefono"])){
        $modifica="UPDATE pacientes SET   telefono='$_GET[telefono]'  WHERE dni='$_SESSION[dni];'";
        $lista=mysqli_query($conexion,$modifica);
        
        }
  //
  if(isset($_GET["Obra_social"])){
    $modifica="UPDATE pacientes SET   obra_social='$_GET[Obra_social]'  WHERE dni='$_SESSION[dni];'";
    $lista=mysqli_query($conexion,$modifica);
    
    }
    //  
    if(! isset($_GET["contraseña"])){
        $modifica="UPDATE pacientes SET  contraseña='$_GET[contraseña]'  WHERE dni='$_SESSION[dni];'";
        $lista=mysqli_query($conexion,$modifica);
        
        }
 header("Location: perfil.php");

?>