<?php
require_once 'dataBase/db.php';

class Material
{

    public function __construct()
    {

    }

    public function list()
    {

    }

    public function create($material)
    {

        $sql = "INSERT INTO materiales (nombre) VALUES ('" . $material . "')";

        $conexion = Conectar::conexion();
        $save = $conexion->query($sql);
        if ($save == 1) {
            echo '<script type="text/javascript">
            alert("Registro guardado correctamente");
             window.location.href="material.php";
            </script>';
        } else {
            echo '<script type="text/javascript">
            alert("Existe un error al guardar el registro");
            window.location.href="material.php";
            </script>';
        }
    }
}

?>