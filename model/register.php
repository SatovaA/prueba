<?php
require_once 'dataBase/db.php';

class Register
{
 
    public function __construct()
    {
        $this->registro = array();
    }
 
    public function list()
    {
        $sqlDocumento="select * from tipo_documento";

        $conexion = Conectar::conexion();

        foreach ($conexion->query($sqlDocumento) as $resultD){
            $this->documento[]=$resultD;
        }
        return $this->documento;
        
    }

    public function create($nombre,$apellidos,$id_documento,$numero_identificacion,$numero_licencia){

        $sql="INSERT INTO registro (nombre, apellidos, id_documento,numero_identificacion, numero_licencia) VALUES
        ('".$nombre."', '".$apellidos."', '".$id_documento."', '".$numero_identificacion."', '".$numero_licencia."')";

        $conexion = Conectar::conexion();
        $save=$conexion->query($sql);
        echo '<script type="text/javascript">
		alert("Registro guardado correctamente");
		window.location.href="index.php";
		</script>';


    }
}
?>