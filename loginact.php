<?php

include ("objetocliente.php");

session_start(); 

$conexion = mysqli_connect("localhost","root","","hospital2");

if(!empty($_POST['usuario'])&& !empty($_POST['contraseña'])){
    //if(isset($_SESSION['usuario'])&&(isset($_SESSION['contraseña']))){
        $dni=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        $lista="SELECT * FROM pacientes WHERE dni='$dni' AND contraseña='$contraseña'";
        $listado=mysqli_query($conexion,$lista);

        $verifica=(mysqli_fetch_array($listado));


    if(!empty($verifica)){

        
       if($_POST['contraseña'] == $verifica['contraseña']){
        $_SESSION['nombreyapellido']=$verifica['nombreyapellido'];
        $_SESSION['contraseña']=$verifica['contraseña'];
        $_SESSION['mail']=$verifica['mail'];
        $_SESSION['dni']=$verifica['dni'];

        header("Location: turnos.php");
       }
    }
       else{
        echo '<div class="card-body">
        <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
        Error en Usuario o contraseña1.
        </div> 
    </div>';
       }
    }
       ?>
<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='loginact.css'>

    <title>Login</title>
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Ingresar </h2>
            <h2 class="inactive underlineHover">Salir</h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/logo-mediano.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="loginact.php" method="post">
                <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario/Dni">
                <input type="text" id="password" class="fadeIn third" name="contraseña" placeholder="Contraseña">
                <input type="submit" name="sumbit" class="fadeIn fourth" value="Ingresar">
            </form>
            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Olvidaste la contraseña?</a>
            </div>
            <div id="formFooter">
                <a class="underlineHover" href="registrarme.html">Quieres registrarte?</a>
            </div>
        </div>
    </div>
</body>


</html>