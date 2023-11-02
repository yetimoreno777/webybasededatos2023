<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de consultas</title>
</head>
<body>
    <?php
        include 'menu.php'
        include 'conexion.php'
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
                            <?php while($registro = $datos->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php $registro["id"];?></td>
                                    <td><?php $registro["nombre"];?></td>
                                    <td><?php $registro["numero_control"];?></td>
                                    <td><?php $registro["semestre"];?></td>
                                    <td><?php $registro["edad"];?></td>
                                    <td><?php $registro["turno"];?></td>
                                    <td><?php $registro["sexo"];?></td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-primary">Editar</a>
                                        <a href="EliminarAlumno.php" class="btn btn-xs btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody> 
                    </table>
                    
                <?php } else { ?>
                    <h2>No existen datos de alumnos en la base de datos</h2>
                    <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>