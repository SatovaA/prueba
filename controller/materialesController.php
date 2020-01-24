<?php
    require_once("model/material.php");
   
    if ($_POST){
        if(isset($_POST['material'])) {
                $material = $_POST['material'];
    
                $usuario = new Material();
                $usuario -> create($material);
    
        }
    }
?>