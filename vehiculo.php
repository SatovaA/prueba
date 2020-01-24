<?php
require_once("controller/vehiculoController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <?php
    include "layouts/style.php";
    ?>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php
    include "layouts/sidebar.php";
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
          <br><br>

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Registro de vehiculo</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Número tarjeta propiedad</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tarjeta_propiedad" id="tarjeta_propiedad">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Placa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="placa" id="placa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Número motor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="numero_motor" id="numero_motor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Número serie</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="numero_serie" id="numero_serie">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Número Chasis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="numero_chasis" id="numero_chasis">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Capacidad de carga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="capacidad_carga" id="capacidad_carga">
                                </div>
                            </div>
                            <hr>
                            <h5>Tecnomecanica</h5>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Fecha expedición</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="fecha_expedicion" id="fecha_expedicion">
                                </div>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Fecha vencimiento</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="fecha_vencimiento" id="fecha_vencimiento">
                                </div>
                            </div>
                            <hr>
                            <h5>Soat</h5>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Fecha expedición</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="fecha_expedicion_soat" id="fecha_expedicion_soat">
                                </div>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Fecha vencimiento</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="fecha_vencimiento_soat" id="fecha_vencimiento_soat">
                                </div>
                            </div>
                            <hr>
                            <h5>Matrícula vehicular</h5>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Fecha expedición</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="fecha_expedicion_matr" id="fecha_expedicion_matr">
                                </div>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Fecha vencimiento</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="fecha_vencimiento_matr" id="fecha_vencimiento_matr">
                                </div>
                            </div>


                            <input type="submit" value="enviar" id="formSave">
                        </form>
                    </div>
                </div>

            </div>
            <!-- Fin Page Content -->


        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php
        include "layouts/footer.php";
        ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<?php
include "layouts/script.php";
?>

</body>

</html>
