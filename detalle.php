<?php include("template/cabecera.php"); ?>
<?php
include("admin/config/bd.php");
$txtID = $_GET["id"];
$sentenciaSQL = $conexion->prepare("SELECT * FROM libro WHERE id=:id");
$sentenciaSQL->bindParam(':id', $txtID);
$sentenciaSQL->execute();
$libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
$txtNombre = $libro['nombre'];
$txtImagen = $libro['imagen'];
$txtDescripcion = $libro['descripcion'];
?>
    <h1 class="display-3"><?php echo $txtNombre; ?></h1>
    <hr class="my-2">
<div class="col-md-5">
    <img class="rounded" src="./img/<?php echo $libro['imagen']; ?>" width="300">
</div>
<div class="col-md-7">
    <h2 class="display-6"><strong>Descripción</strong></h2>
    <p><?php echo $txtDescripcion; ?></p>
    <hr class="my-2">
    <a class="btn btn-primary btn-lg" href="productos.php" role="button">Volver atrás</a>
</div>
<div class="jumbotron">
    <p class="lead">
    </p>
</div>
<?php include("template/pie.php"); ?>