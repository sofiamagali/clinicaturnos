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

?>
