<?php

//agregar persona
//elementos que recibo
$nombreyape = $_GET["nombreyape"];
$dni =$_GET["dni"];
$mail =$_GET["email"];
$contraseña = $_GET["contraseña"];



$conexion = mysqli_connect("localhost","root","","hospital2");//root por defecto y luego va la contraseña no se completa 

if(mysqli_connect_errno()){
    echo "error";
    echo "<br>";


}else {
    echo "se conecto  ";
    echo "<br>";

}

// si no existe el user agrega en bd
$lista="SELECT dni FROM pacientes WHERE dni='$dni' ";
$lista=mysqli_query($conexion,$lista);

echo var_dump($lista);
echo "<br>";

$verifica=(mysqli_fetch_array($lista));

echo $verifica['dni']; 

if($verifica['dni'] == $dni){
    echo "ya se encuentra registrado en el sistema";
}else{
    $sql = "INSERT INTO `pacientes` (`nombreyapellido`,`contraseña`,`dni`,`mail`) VALUES ('$nombreyape', '$contraseña','$dni','$mail')";
    $lista=mysqli_query($conexion,$sql);
    echo "se agrego";
}

//fin agrega bd

//agrego para la session

$_SESSION['dni']= $dni;
$_SESSION['contraseña'] =$contraseña;

header("location : index.php");





?>
