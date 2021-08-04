<?php 
class CLiente {
    //atributos
    public $nombreyApellido;
    public  $email;
    public  $dni;
    public  $contraseña;

  //constructor
    

    public function __construct($nombreycontra,$email,$dni,$contra){
       $this -> nombreyApellido = $nombreycontra;
        $this -> email = $email;
       $this -> dni = $dni;
       $this -> contraseña = $contra;
       session_start();

    }

    public function iniciar($usuario){
        $this -> nombreyApellido = $usuario['nombreyapellido'];
        $this -> email = $usuario['mail'];
       $this -> dni = $usuario['usuario'];
       $this -> contraseña = $usuario['contraseña'];
    }

    public function getuser(){
        return $_SESSION['user'];
    }

    public function darnombre(){
        return $this -> nombreyApellido;
    }

    
    public function closesession(){
        session_unset();
        session_destroy();
    }


}

?>