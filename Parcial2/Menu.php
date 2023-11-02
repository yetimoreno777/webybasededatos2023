<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <title>Menu</title>
    <style>
        .navbar{
            animation: rainbow-bg 1.5s linear;
		    animation-iteration-count: infinite;
        }

        @keyframes rainbow-bg{
            0%{background-color: lightgray;}
            50%{background-color: gray;}
            100%{background-color: lightgray;}
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CETiS 107</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mas opciones
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Consultar alumnos</a></li>
                <li><a class="dropdown-item" href="#">Registrar alumno</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Nada</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="card m-2">
                <h1>Sistema de gestion de control escolar</h1>
                <h3>CETiS 107</h3>
                <img src="dejeti.png" width="20%" class="img-fluid">
            </div>
        </div>
    </div>
        <footer class="text-center">
            <span>Cetis 107 web App &copy;2023</span>
        </footer>
<script src="js/bootstrap.js"></script>
</body>
</html>