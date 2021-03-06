<?php
require_once("controller/registroController.php");
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
                        <h6 class="m-0 font-weight-bold text-primary">Registro</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="formRegister">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nombres</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Apellidos</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="apellidos" id="apellidos"
                                           placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tipo documento</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="id_documento" name="id_documento" required>
                                        <?php foreach ($view as $documento) { ?>
                                            <option value="<?php echo $documento["id"]; ?>"><?php echo $documento["tipo"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Número identificacion</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="numero_identificacion"
                                           name="numero_identificacion">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">
                                    Número de licencia de conducción
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="numero_licencia" name="numero_licencia"
                                           required>
                                </div>
                            </div>
                            <input type="submit" value="enviar" id="saveRegister">
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
<script>
    $("#saveRegister").on('click',function(){
        $("#formRegister").validate({

            rules: {
                nombre: {
                    required: true,
                },

                apellidos: {
                    required: true,
                },
                id_documento: {
                    required: true,
                },
                numero_identificacion: {
                    required: true,
                },
                numero_licencia: {
                    required: true,
                },


            },
            messages: {
                nombre: {
                    required: "El campo nombres es requerido",
                },
                apellidos: {
                    required: "El campo apellidos es requerido",
                },
                id_documento: {
                    required: "El campo tipo documento es requerido",
                },
                numero_identificacion: {
                    required: "El campo número identificacion es requerido",
                },
                numero_licencia: {
                    required: "El campo número de licencia es requerido",
                },

            }

        });


    });
</script>
</body>

</html>
