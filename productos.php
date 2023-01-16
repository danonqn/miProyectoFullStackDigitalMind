<?php include("template/cabecera.php"); ?>
<?php
include("admin/config/bd.php");
$sentenciaSQL = $conexion->prepare("SELECT * FROM libro");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach($listaLibros as $libro) {?>
<div class="col-md-3">
    <div class="card">
        <img class="card-img-top" src="./img/<?php echo $libro['imagen']; ?>">
        <div class="card-body">
            <h4 class="card-title"><?php echo $libro['nombre']; ?></h4>
            <a class="btn btn-primary" href="detalle.php?id=<?php echo $libro['id']; ?>" role="button">Ver más</a>
        </div>
    </div>
</div>
<?php } ?>
<?php include("template/pie.php"); ?>