<?php
    require_once("model/vehiculo.php");
    $vehiculo = new Vehiculo();
    $list = $vehiculo->list();

    if(!empty($_GET['id'])){
        $listEdit = $vehiculo->edit($_GET['id']);
    }
    if ($_POST){
        if(isset($_POST['tarjeta_propiedad'])) {
                $tarjeta_propiedad = $_POST['tarjeta_propiedad'];
                $placa = $_POST['placa'];
                $numero_motor = $_POST['numero_motor'];
                $numero_serie = $_POST['numero_serie'];
                $numero_chasis = $_POST['numero_chasis'];
                $capacidad_carga = $_POST['capacidad_carga'];
                $fecha_expedicion = $_POST['fecha_expedicion'];
                $fecha_vencimiento = $_POST['fecha_vencimiento'];
                $fecha_expedicion_soat = $_POST['fecha_expedicion_soat'];
                $fecha_vencimiento_soat = $_POST['fecha_vencimiento_soat'];
                $fecha_expedicion_matr = $_POST['fecha_expedicion_matr'];
                $fecha_vencimiento_matr = $_POST['fecha_vencimiento_matr'];

                $usuario = new Vehiculo();
                $usuario -> create($tarjeta_propiedad,$placa,$numero_motor,$numero_serie,$numero_chasis,$capacidad_carga,
                            $fecha_expedicion, $fecha_vencimiento,$fecha_expedicion_soat,$fecha_vencimiento_soat,
                            $fecha_expedicion_matr,$fecha_vencimiento_matr);
    
        }else{
            echo "No sepudo";
        }
    }



?>