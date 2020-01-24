<?php
    require_once("model/rutas.php");
    $ruta = new Rutas();
    $list = $ruta->list();

    if(!empty($_GET['id'])){
        $permiso = $ruta->consult($_GET['id']);
    }

if ($_POST){
    if(isset($_POST['conductor_id'])) {
        $conductor_id = $_POST['conductor_id'];
        $lugar_destino = $_POST['lugar_destino'];
        $numero_kilometro = $_POST['numero_kilometro'];
        $costo_transporte = $_POST['costo_transporte'];
        $material_id = $_POST['material_id'];
        $cargaId = $_POST['cargaId'];
        $vehiculo_id = $_POST['vehiculo_id'];
        $estado = 1;

        $ruta = new Rutas();
        $ruta -> create($conductor_id,$lugar_destino,$numero_kilometro,$costo_transporte,$material_id,$cargaId,$vehiculo_id,$estado);

    }else{
        echo "No sepudo";
    }
}




?>