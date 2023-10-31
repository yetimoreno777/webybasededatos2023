<?php
include 'conexion.php';

$nombre = $_POST["nombre"];
$numero_control = $_POST["nc"];
$semestre = $_POST["semestre"];
$edad = $_POST["edad"];
$turno = $_POST["turno"];
$sexo = $_POSR["sexo"];

$sql = "INSERT INTO alumno(nombre, numero_control, semestre, edad, turno, sexo)"; 
$sql += "VALUES('".$nombre."','".$numero_control."','".$semestre."','".$semestre."','".$edad."','".$turno."','".$sexo."')";

if($conexion-query($sql) === TRUE){
    header("Location: consultas.php");
    $conexion->close();
    exit;
} else {
    echo"<h2>Ocurrio un error</h2> <p>Error; " .$sql. "<br>" . $conexion->error . "</p>";
    echo"<h3><a href='consultas.php'>Registrar a alumnos</a></h3>";
}

?>