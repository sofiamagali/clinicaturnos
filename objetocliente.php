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
    }


    // funciones o metodos

    public function mostrarValores(){
        echo "Nombres y apellidos :".$this->nombreyApellido;
        echo "<br>";
        echo "Su dni es :".$this-> dni;
        echo "<br>";
        echo "Su email es: ".$this-> email;
        echo "<br>";


    }

    public function mostrarturnos(){
        $conexion = mysqli_connect("localhost","root","","hospital2"); 
       
        $list="SELECT cod_turno FROM turnos_dados where dni=$dni";
        $lista=mysqli_query($conexion,$list); 

        while($fila=mysqli_fetch_array($lista)){
            //mostrar
            

        } 



    }
    //gett y sett

    public function setnota($nota){
        $this -> nota = $nota;

    }
}

?>