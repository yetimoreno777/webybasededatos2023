<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php 
    include 'menu.php';
    include 'conexion.php';

    $sql = "SELECT * FROM alumnos";
    $datos = $conexion -> query($sql);

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_rows > 0){ ?>
                    <div class="table-responsive card m-4 p-2">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>nombre</th>
                                <th>Numero de control</th>
                                <th>Semestre</th>
                                <th>Edad</th>
                                <th>Turno</th>
                                <th>Sexo</th>
                                <th>opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($registro = $datos->fetch_assoc()){?>
                                <tr>
                                    <td><?php echo $registro["id"]; ?></td>
                                    <td><?php echo $registro["nombre"]; ?></td>
                                    <td><?php echo $registro["numero_control"]; ?></td>
                                    <td><?php echo $registro["semestre"]; ?></td>
                                    <td><?php echo $registro["edad"]; ?></td>
                                    <td><?php echo $registro["turno"]; ?></td>
                                    <td><?php echo $registro["sexo"]; ?></td>
                                    <td>
                                        <a href="EditarAlumno.php?id=<?php echo $registro ["id"]; ?>" class="btn btn-sm btn-primary">Editar</a>
                                        <a href="EliminarAlumno.php?id=<?php echo $registro["id"]; ?>" class="btn btn-sm btn-danger">Borrar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table> 
                    </div>
               <?php } else { ?>
                <h2 class="m-4"> no existe datos</h2>
               <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>