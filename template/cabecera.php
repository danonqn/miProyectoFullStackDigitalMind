<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Sitio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/user3.css">
    <link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="css/user3.css">
    <link rel="alternate stylesheet" type="text/css" media="screen" title="brown-theme" href="css/user4.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary menues">
        <ul class="nav navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="index.php"><strong>Daniel Lima</strong></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="productos.php">Cómics</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="nosotros.php">Acerca de mí</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin/index.php">Ingresar al Administrador</a>
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">Elija un tema visual</a>
            </li>
            <li class="nav-item">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-danger nav-link" name="choice" value="blue-theme" onclick="chooseStyle(this.value, 60)">Tema 1</button>
                    <button type="button" class="btn btn-success nav-link" name="choice" value="brown-theme" onClick="chooseStyle(this.value, 60)">Tema 2</button>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container">
        <br>
        <div class="row">