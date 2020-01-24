<?php
require_once 'dataBase/db.php';

class Vehiculo
{
 
    public function __construct()
    {
        $this->vehiculo = array();
        $this->documentEdit = array();
    }
 
    public function list()
    {
        $conexion = Conectar::conexion();

        $sql="select * from vehiculo";

        foreach ($conexion->query($sql) as $result){
            $this->vehiculo[]=$result;
        }
        return $this->vehiculo;
        
    }

    public function create($tarjeta_propiedad,$placa,$numero_motor,$numero_serie,$numero_chasis,$capacidad_carga,
                           $fecha_expedicion, $fecha_vencimiento,$fecha_expedicion_soat,$fecha_vencimiento_soat,
                           $fecha_expedicion_matr,$fecha_vencimiento_matr){

        $sql="INSERT INTO vehiculo (no_tarjeta_propiedad, placa, numero_motor, numero_serie, numero_chasis, capacidad_carga) VALUES
        ('".$tarjeta_propiedad."', '".$placa."', '".$numero_motor."', '".$numero_serie."', '".$numero_chasis."', '".$capacidad_carga."')";

        $conexion = Conectar::conexion();
        $save=$conexion->query($sql);

        if(!empty($conexion->insert_id)){
            $fecha_expedicion = [$fecha_expedicion, $fecha_expedicion_soat,$fecha_expedicion_matr];
            $fecha_vencimiento = [$fecha_vencimiento, $fecha_vencimiento_soat,$fecha_vencimiento_matr];
            $id_documento = [2, 1, 3];

            for($i = 0; $i< count($fecha_expedicion); $i++){
                $sqlVe="INSERT INTO vehiculo_documentos (vehiculo_id,documento_id, fecha_expedicion, fecha_vencimiento) VALUES
                        ('".$conexion->insert_id."', '".$id_documento[$i]."','".$fecha_expedicion[$i]."', '".$fecha_vencimiento[$i]."')";

                $conexionVe = Conectar::conexion();
                $saveVe=$conexionVe->query($sqlVe);
            }
        }

        if($saveVe == 1){
            echo '<script type="text/javascript">
                alert("Registro guardado correctamente");
                window.location.href="vehiculo.php";
                </script>';
        }else{
            echo '<script type="text/javascript">
                    alert("No se pude registrar el vehículo");
                    window.location.href="vehiculo.php";
                    </script>';
        }



    }


    public function edit($idVehiculo){

        $conexion = Conectar::conexion();
        $sql="select * from vehiculo where id = '".$idVehiculo."' ";


        if($row = $conexion->query($sql)->fetch_object()) {
            $resultVehi=$row;
        }

        $sqlDocument="select vehiculo_documentos.id, vehiculo_documentos.fecha_expedicion, vehiculo_documentos.fecha_vencimiento,
                        documentos_vehiculo.tipo_documento, vehiculo_documentos.documento_id
                        from vehiculo_documentos inner join documentos_vehiculo on documentos_vehiculo.id = vehiculo_documentos.documento_id
                        where vehiculo_id = '".$idVehiculo."'";

        foreach ($conexion->query($sqlDocument) as $result){
            $this->documentEdit[]=$result;
        }

        return array("vehiculo" => $resultVehi, "documento"=>$this->documentEdit);




    }

    public function update($tarjeta_propiedad,$placa,$numero_motor,$numero_serie,$numero_chasis,$capacidad_carga,
                           $fecha_expedicion, $fecha_vencimiento,$fecha_expedicion_soat,$fecha_vencimiento_soat,
                           $fecha_expedicion_matr,$fecha_vencimiento_matr,$id_vehiculo,$idDocumentS,$idDocumentT,$idDocumentM){

        $sql="UPDATE vehiculo SET no_tarjeta_propiedad= 1 WHERE id = 2 )";

        $conexion = Conectar::conexion();
        $save=$conexion->query($sql);

var_dump( $save);



            echo '<script type="text/javascript">
                alert("Registro guardado correctamente");
                </script>';




    }

}
?>