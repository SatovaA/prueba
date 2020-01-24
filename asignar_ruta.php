<?php
require_once("controller/rutasController.php");
$id = $_GET['id'];
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
                        <h6 class="m-0 font-weight-bold text-primary">Asignacion de rutas</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="vehiculo_id" id="vehiculo_id" value="<?php echo $id; ?>">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Persona acargo</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="conductor_id" name="conductor_id">
                                        <option value="">Seleccionar un conductor</option>
                                        <?php foreach ($list['usuario'] as $usuario) { ?>
                                            <option value="<?php echo $usuario["id"]; ?>"><?php echo $usuario["nombre"].' '. $usuario["apellidos"]; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Lugar de destino</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lugar_destino" id="lugar_destino">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Número kilometros</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="numero_kilometro" id="numero_kilometro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Costo transporte</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="costo_transporte"
                                           id="costo_transporte" readonly>
                                </div>
                            </div>
                            <hr>
                            <h5>Carga</h5>

                            <div class="row">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label>Material</label>
                                        <select class="form-control" id="materia_id">
                                            <?php foreach ($list['material'] as $material) { ?>
                                                <option value="<?php echo $material["id"]; ?>"><?php echo $material["nombre"]; ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label>Peso carga KG </label>
                                        <input type="number" min="1" class="form-control" id="cargaId"
                                               onKeyPress="return soloNumeros(event)">

                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <button type="button" id="bt_add" class="btn btn-primary"
                                                style="background-color: #00923f;">Agregar</button>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <table id="detalles" class="table table-striped table-bordered table-condensed">
                                        <thead>
                                        <th style="text-align: center" width="10px">Eliminar</th>
                                        <th style="text-align: center" width="10px">Material</th>
                                        <th style="text-align: center" width="10px">Peso carga KG</th>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <input type="submit" value="enviar">
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
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Información</h5>
            </div>
            <div class="modal-body">
                El vehiculo ya tiene una ruta asignada
            </div>
            <div class="modal-footer">
                <a href="viewVehiculo.php"  class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<?php
include "layouts/script.php";
?>

<script>
    $(document).ready(function () {
        $('#numero_kilometro').change(function () {
            var valor_kilometro = 160000;
            var numero_kilometro = $('#numero_kilometro').val();
            $('#costo_transporte').val(numero_kilometro * valor_kilometro);
        });
        $('#bt_add').click(function () {
            agregar();
        });
    });


    $("#guardar").hide();
    var i = 0;
    var numero = [];
    var suma = 0;

    function agregar() {

        material_id = $("#materia_id").val();
        cargaId = $("#cargaId").val();
        material = $("#materia_id option:selected").text();


        if (material_id != "" && cargaId != "") {

            numerico = parseInt(cargaId);
            suma = suma + numerico;

            if (suma <= 1000) {
                var fila = '<tr class="selected" id="fila' + i + '">' +
                    '<td><button type="button" class="btn btn-danger" onclick="eliminar(' + i + ');">X</button></td>' +
                    '<td><input type="hidden" name="material_id[]" value="' + material_id + '">' + material + '</td>' +
                    '<td><input type="hidden" name="cargaId[]" value="' + cargaId + '">' + cargaId + '</td>' +
                    '</tr>';
                i++;
                limpiar();

                evaluar();

                $('#detalles').append(fila);
            } else {
                alert("Error No puede asignar material con ese peso debido a que supera el paximo de 1000 kg");
            }


        } else {
            alert("Error al ingresar material");
        }

    }

    function limpiar() {
        $("#cargaId").val("");
    }

    function evaluar() {
        $("#guardar").show();
    }

    function eliminar(index) {
        $("#fila" + index).remove();
        evaluar();
    }

    function soloNumeros(e) {
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
</script>
<?php

if(!empty($permiso['rutaA'])){
?>
<script>
    $('#exampleModal').modal({backdrop: 'static', keyboard: false})
</script>
<?php } ?>

</body>

</html>
