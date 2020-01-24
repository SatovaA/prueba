<?php
require_once("controller/materialesController.php");
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
                <!-- Page Heading -->

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Registro de materiales</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="formMaterial">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nombre del material*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="material" id="material">
                                </div>
                            </div>

                            <input type="submit" value="enviar" id="saveForm">
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
