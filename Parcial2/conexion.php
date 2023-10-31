<?php
    $server="localhost";
    $user="root";
    $password="root "; 
    $baseDatos="cetis107";
    //conexion
    $conexion = new mysqli($server, $user, $password);

    //revisar conexion
    if($conexion->connect_error){
        die("Fallo la conexion" . $conexion->connect_error);
    }





?>