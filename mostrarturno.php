<?php 
include("cabeza.html");
?>


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Turno nuevo </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Horarios disponibles del profecional:</label>

<?php
$fecha = $_GET["fecha"];
echo $fecha;

$hora = $_GET["hora"];
echo $hora;


?>







<?php 
include("footer.html");
?>