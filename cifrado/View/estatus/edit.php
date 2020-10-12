<div class="container">
    <h1 class="title">Editar estatus <?= $alumno['e_nombre']?></h1>
    <form class="formulario" method="POST" action="index.php?c=estatus&a=actualizar">
        <input type="hidden" name="id" value="<?= $alumno['id_estatus']?>">
        <div class="form-group">
            <label for="nom">Nombre</label>
            <input type="text" id="nombre" class="form-control" name="nombre" value="<?= $alumno['e_nombre']?>" placeholder="Ingresa el estatus">
        </div>
        <div class="">
            <input class="btn btn-primary" type="submit" value="Enviar">
            <a class="btn btn-danger" href="index.php?c=estatus&a=index">Cancelar</a>
        </div>
    </form>
</div>