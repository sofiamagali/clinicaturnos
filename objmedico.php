<?php 
class Medico {
    //atributos
    public $nombreyApellido;
    public  $email;
    public  $dni;
    public $matricula;
    public $vigente;

  //constructor
    public function __construct($nombreycontra,$email,$dni,$contra,$matricula,$vigente){
        $this -> nombreyApellido = $nombreycontra;
        $this -> email = $email;
        $this -> dni = $dni;
        $this -> contraseña = $contra;
        $this -> matricula = $matricula;
        $this -> vigente = $vigente;

    }

    public function mostrarmedico(){
        $conexion = mysqli_connect("localhost","root","","hospital2"); 
       
        $list="SELECT * FROM medico";
        $lista=mysqli_query($conexion,$list); 

        while($fila=mysqli_fetch_array($lista)){
            //mostrar
            

        } 





}
    ?>