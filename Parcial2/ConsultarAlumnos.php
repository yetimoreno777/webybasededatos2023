<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar alumnos</title>
</head>
<body>
    <?php
        include 'menu.php';
        include 'conexion.php';

        $sql = "SELECT * FROM alumnos";
        $datos=$conexion->query($sql);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_row->0){?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Numero de control</td>
                            <td>Semestre</td>
                            <td>Edad</td>
                            <td>Turno</td>
                            <td>Sexo</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($registro = $datos->fetch_assoc()){?>
                            <tr>
                                <td> <?php echo $registro["id"]; ?> </td>
                                <td> <?php echo $registro["nombre"]; ?> </td>
                                <td> <?php echo $registro["numero_control"]; ?> </td>
                                <td> <?php echo $registro["semestre"]; ?> </td>
                                <td> <?php echo $registro["edad"]; ?> </td>
                                <td> <?php echo $registro["turno"]; ?> </td>
                                <td> <?php echo $registro["sexo"]; ?> </td>
                                <td>
                                    <a href="" class="btn btn-xs btn-primary">Editar</a>
                                    <a href="" class="btn btn-xs btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>    
                    </tbody>
                </table>
                <?php} else {?>
                    <h2>No existen datos de alumnos en la base de datos</h2>
                <?php } ?>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <span>CETiS 107  &copy; web app</span>
    </footer>
</body>
</html>