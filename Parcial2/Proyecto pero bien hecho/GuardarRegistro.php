<?php
    include 'conexion.php';
    $nombre =$_POST["nombre"];
    $numero_control =$_POST["nc"];
    $semestre =$_POST["semestre"];
    $edad =$_POST["edad"];
    $turno =$_POST["turno"];
    $sexo =$_POST["sexo"];

    $sql= "INSERT INTO alumnos(nombre, numero_control, semestre, edad, turno, sexo) VALUES('".$nombre."', '".$numero_control."', ".$semestre.", ".$edad.", '".$turno."',".$sexo.")";

    if($conexion->query($sql) === TRUE){
        header("Location: ConsultarAlumno.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrio un error </h2> <p>Error: " .$sql ."<br>" . $conexion->error . "</p>";
        echo "<h3><a href='ConsultarAlumno.php'>Regresar a alumnos </a> </h3>";
    }
?>