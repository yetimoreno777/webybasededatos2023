<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumnos</title>
    <link rel="stylehest" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action=""method="POST">
                    <div class="form-group">
                        <label for="">Numero de control</label>
                        <input name="nc"type="text" class="form-control" placeholder="Teclea el numero de control" require>
                    </div>
                    <div class="form-group">
                        <label for="">Semestre</label>
                        <input name="nc"type="text" class="form-control" placeholder="Teclea el semestre" require>
                    </div>
                    <div class="form-group">
                        <label for="">Sexo</label>
                        <input name="nc"type="text" class="form-control" placeholder="Teclea el sexo" require>
                    </div>
                    <div class="form-group">
                        <label for="">Edad</label>
                        <input name="nc"type="text" class="form-control" placeholder="Teclea la edad" require>
                    </div><br>
                    <div class="form-group">
                        <label for="">Turno</label>
                        <select name="turno" class="form-group">
                            <option value="">Seleccione el turno</option>
                            <option value="MATUTINO">MATUTINO</option>
                            <option value="VESPERTINO">VESPERTINO</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="">Sexo</label>
                        <select name="Sexo" class="form-group">
                            <option value="">Selecciona el sexo</option>
                            <option value="0">HOMBRE</option>
                            <option value="1">MUJER</option>
                            <option value="2">Prefiero no responder</option>
                        </select>
                    </div><br>
                    <div>
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a href="consultas.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="text-container">
        <hr>
        Cetis 107 &copy; 2023
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>