<?php
session_start(); 

$conexion = mysqli_connect("localhost","root","","hospital2");               

$dni= $_SESSION['dni'];


if(isset($_GET["id"]) ){
$elimina="DELETE FROM `turnos_dados` WHERE dni='$dni' and cod_turno='$_GET[id]' ";
$cambiar="UPDATE `horario_medico` SET `disponible`='s' where WHERE dni='$dni' and cod_turno='$_GET[id]'  ";
$lista1=mysqli_query($conexion,$elimina);
$lista2=mysqli_query($conexion,$cambiar);


}
header("Location: turnos.php");


?>