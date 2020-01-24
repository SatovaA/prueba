<?php
    require_once("model/register.php");
    $classRegister = new Register();
    $view = $classRegister->list();
    require_once("index.php");

    

   
    if ($_POST){
        if(isset($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $id_documento = $_POST['id_documento'];
                $numero_identificacion = $_POST['numero_identificacion'];
                $numero_licencia = $_POST['numero_licencia'];
    
                $usuario = new Register();
                $usuario -> create($nombre,$apellidos,$id_documento,$numero_identificacion,$numero_licencia);
    
        }else{
            echo "No sepudo";
        }
    }
?>