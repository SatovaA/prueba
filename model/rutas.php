<?php
require_once 'dataBase/db.php';

class Rutas {
 
    public function __construct()
    {
        $this->material = array();
        $this->usuario = array();
        $this->rutaEdit = array();
        $this->documentEdit = array();
    }

    public function list(){
        $sql="select * from materiales";
        $sqlUsuario="select * from registro";

        $conexion = Conectar::conexion();

        foreach ($conexion->query($sql) as $result){
            $this->material[]=$result;
        }
        foreach ($conexion->query($sqlUsuario) as $resultU){
            $this->usuario[]=$resultU;
        }
        return array("material"=>$this->material,"usuario" => $this->usuario);

    }

    public function create($conductor_id,$lugar_destino,$numero_kilometro,$costo_transporte,$material_id,$cargaId,$vehiculo_id,$estado)
    {

        $sql = "INSERT INTO asignar_ruta (lugar_destino,numero_kilometros,vehiculo_id,costo_transporte,conductor_id,estado) VALUES 
                ('".$lugar_destino."','".$numero_kilometro."','".$vehiculo_id."','".$costo_transporte."','".$conductor_id."','".$estado."')";

        $conexion = Conectar::conexion();
        $save = $conexion->query($sql);

        if(!empty($conexion->insert_id)){

            for($i = 0; $i< count($material_id); $i++){
                $sqlVe="INSERT INTO ruta_materiales (ruta_id, material_id, peso_carga) VALUES
                        ('".$conexion->insert_id."', '".$material_id[$i]."','".$cargaId[$i]."')";

                $conexionVe = Conectar::conexion();
                $saveVe=$conexionVe->query($sqlVe);
            }
        }
        if ($saveVe == 1) {

            echo '<script type="text/javascript">
            alert("Registro guardado correctamente");
            window.location.href="asignar_ruta.php?id='.$vehiculo_id.'";
            </script>';
        } else {
            echo '<script type="text/javascript">
            alert("Existe un error al guardar el registro");
            window.location.href="asignar_ruta.php?id='.$vehiculo_id.'";
            </script>';
        }
    }


    public function consult($idVehiculo){

            $conexion = Conectar::conexion();

            $sql="select * from asignar_ruta where vehiculo_id = '".$idVehiculo."' AND estado = 1";


            if($row = $conexion->query($sql)->fetch_object()) {
                $rutaA=$row;
            }
            if(!empty($rutaA)){
                $rutaA = $rutaA;
            }else{
                $rutaA = null;
            }

        $sqlDocument="select vehiculo_documentos.id, vehiculo_documentos.fecha_expedicion, vehiculo_documentos.fecha_vencimiento,
                        documentos_vehiculo.tipo_documento, vehiculo_documentos.documento_id
                        from vehiculo_documentos inner join documentos_vehiculo on documentos_vehiculo.id = vehiculo_documentos.documento_id
                        where vehiculo_id = '".$idVehiculo."'";

        foreach ($conexion->query($sqlDocument) as $result){
            $this->documentEdit[]=$result;
        }



            return array("rutaA" => $rutaA, "document",$this->documentEdit);

        }





}
?>