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
                </table>
                <?php} else {?>
                    <h2>No existen datos de alumnos en la base de datos</h2>
                <?php } ?>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <span>CETiS 107 web app</span>
    </footer>
</body>
</html>