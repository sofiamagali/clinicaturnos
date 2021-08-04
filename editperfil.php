<?php 
include("cabeza.php");
?>


<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Mi perfil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="editap.php" method="GET">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="mail" type="email" class="form-control" id="exampleInputEmail1" placeholder=<?php if(isset ($_SESSION['mail'])){
                            echo $_SESSION['mail'];

                        }
                        else{
                            echo "No se encuentra informacion.";
                        };?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="contraseña "type="text" class="form-control" id="exampleInputPassword1" placeholder=<?php echo $_SESSION["contraseña"] ;?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Direccion</label>
                    <input name="direccion" type="text" class="form-control" id="exampleInputPassword1" placeholder=<?php 
                        if(isset ($_SESSION['direccion'])){
                            echo $_SESSION['direccion'];

                        }
                        else{
                            echo "No se encuentra informacion.";
                        }; ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sexo</label>
                    <input name="sexo" type="text" class="form-control" id="exampleInputPassword1" placeholder=<?php if(isset ($_SESSION['sexo'])){
                            echo $_SESSION['sexo'];

                        }
                        else{
                            echo "No se encuentra informacion";
                        }
                        ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Celular</label>
                    <input name="telefono" type="text" class="form-control" id="exampleInputPassword1" placeholder=<?php if(isset ($_SESSION['telefono'])){
                            echo $_SESSION['telefono'];

                        }
                        else{
                            echo "No se encuentra informacion.";
                        };?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Obra Social</label>
                    <input name="obrasocial" type="text" class="form-control" id="exampleInputPassword1" placeholder=<?php if(isset ($_SESSION['Obra Social'])){
                            echo $_SESSION['Obra Social'];

                        }
                        else{
                            echo "No se encuentra informacion.";
                        };?>
                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
              </form>
            </div>





<?php 
include("footer.html");



?>