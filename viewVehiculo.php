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
                        <h6 class="m-0 font-weight-bold text-primary">Vehículos registrados</h6>
                    </div>
                    <div class="card-body">
                        <a href="vehiculo.php" class="btn btn-primary float-right">Agregar vhículo</a>
                        <br><br>
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">N° tarjeta propiedad</th>
                                <th scope="col">Placa</th>
                                <th scope="col">Capacidad de carga</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($list as $vehiculo) { ?>
                                <tr>
                                    <th><?php echo $vehiculo["no_tarjeta_propiedad"]; ?></th>
                                    <td><?php echo $vehiculo["placa"]; ?></td>
                                    <td><?php echo $vehiculo["capacidad_carga"]; ?></td>
                                    <td>
                                        <a href="asignar_ruta.php?id=<?php echo $vehiculo["id"]; ?>" style="color: #fff"
                                           class="btn btn-secondary btn-sm">Asignar ruta</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
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
