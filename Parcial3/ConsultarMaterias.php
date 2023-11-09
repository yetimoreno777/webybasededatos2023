<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Materias</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'menu.php'; 
        include 'conexion.php'; 
        //Recuperamos los datos de la base de datos 
        $sql = "SELECT * FROM materias";
        $datos = $conexion->query($sql);

    ?>    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_rows > 0) { ?>
                <div class="table-responsive card m-4 p-2">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Especialidad</th>
                                <th>Semestre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($registro = $datos->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $registro["id"]; ?></td>
                                    <td><?php echo $registro["nombre"]; ?></td>
                                    <td><?php echo $registro["especialidad"]; ?></td>
                                    <td><?php echo $registro["semestre"]; ?></td>
                                    <td>
                                        <a href="editarAlumno.php?id=<?php echo $registro["id"]; ?>"  class="btn btn-sm btn-primary">Editar</a>
                                        <a href="eliminarAlumno.php?id=<?php echo $registro["id"]; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php } else { ?>
                    <h2 class="m-4">No existe datos de alumnos en la base e datos</h2>
                <?php } ?>
            </div>
        </div>
    </div>


    <footer class="text-center">
        <hr>
        CETIS 107 &copy; 2023
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>