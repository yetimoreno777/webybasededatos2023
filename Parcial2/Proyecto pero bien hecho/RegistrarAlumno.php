<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php 
        include 'menu.php'; 
        include 'conexion.php';
    ?>
        <div class="container">
            <div class="row">
                <div class="col-12 m-4 p-4" >
                    <form action="GuardarRegistro.php" method="POST">
                        <div class="form-group">
                            <label for="">Nombre:</label>
                            <input  name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del alumno" required>
                        </div>
                        <div class="form-group">
                            <label for="">Numero de control:</label>
                            <input  name="nc" type="text" class="form-control" placeholder="Teclea el nunmero de control" required>
                        </div>
                        <div class="form-group">
                            <label for="">semestre:</label>
                            <input  name="semestre" type="number" class="form-control" placeholder="Teclea el semestredel alumno" required>
                        </div>
                        <div class="form-group">
                            <label for="">Edad:</label>
                            <input  name="edad" type="number" class="form-control" placeholder="Teclea la edad del alumno" required>
                        </div>
                        <div class="form-group">
                            <label for="">Turno:</label>
                            <select name="turno" class="form-control" required>
                            <option value="">Seleccciona el turno</option>
                            <option value="MATUTINO">MATUTINO</option>
                            <option value="VESPERTINO">VESPERTINO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Sexo:</label>
                            <select name="sexo" class="form-control" required>
                                <option value="">Selecciona el sexo</option>
                                <option value="0">Femenino</option>
                                <option value="1">Masculino</option>
                            </select>
                        </div><br>
                        <div>
                            <input type="submit" value="Registrar" class="btn btn-primary">
                            <a href="ConsultarAlumno.php" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    <footer class="text_center"> 
        <hr>
        CETIS 107 &copy; 2023
    </footer>
</body>
</html>