<?php include('template/cabecera.php'); ?>
<div class="col-md-12">

    <div class="jumbotron">
        <h1 class="display-3">Bienvenido <?php echo $nombreUsuario; ?></h1>
        <p class="lead">Esta es la seccion de administracion de cómics del sitio</p>
        <hr class="my-2">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar cómics</a>
        </p>
    </div>

</div>
<?php include('template/pie.php'); ?>