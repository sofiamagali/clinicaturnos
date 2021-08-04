<?php 
include("cabeza.php");

?>
<div class="col-12 col-sm-8 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Paciente
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $_SESSION['nombreyapellido']; ?></b></h2>
                      <p class="text-muted text-sm"><b>Mis datos: </b> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-map-signs"></i></span>Direccion:
                        <?php 
                        if(isset ($_SESSION['direccion'])){
                            echo $_SESSION['direccion'];

                        }
                        else{
                            echo "No se encuentra informacion.";
                        }; ?>
                        </li><br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono: <?php 
                        if(isset ($_SESSION['telefono'])){
                            echo $_SESSION['telefono'];

                        }
                        else{
                            echo "No se encuentra informacion.";
                        };?>
                        </li><br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span> Mail: <?php 
                        if(isset ($_SESSION['mail'])){
                            echo $_SESSION['mail'];

                        }
                        else{
                            echo "No se encuentra informacion.";
                        };?>
                        </li><br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user-shield"></i></span> Obra Social: <?php 
                        if(isset ($_SESSION['Obra Social'])){
                            echo $_SESSION['Obra Social'];

                        }
                        else{
                            echo "No se encuentra informacion.";
                        };?>
                        </li><br>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-users"></i></span> Sexo:<?php 
                        if(isset ($_SESSION['sexo'])){
                            echo $_SESSION['sexo'];

                        }
                        else{
                            echo "No se encuentra informacion";
                        };?></li><br>

                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="img/user.png" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                   
                    <a href="editperfil.php" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Editar Perfil
                    </a>
                  </div>
                </div>
              </div>
            </div>


<?php 
include("footer.html");



?>
