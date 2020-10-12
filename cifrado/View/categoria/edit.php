<div class="container">
<h1 class="title">Editar categoria <?= $alumno['ce_nombre']?></h1>
    <form class="formulario" method="POST" action="index.php?c=categoria&a=actualizar">
        <input type="hidden" name="id" value="<?= $alumno['id_categoria']?>">    
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control" name="nombre" value="<?= $alumno['ce_nombre']?>" placeholder="Ingresa el estatus">
        </div>
        <div class="botones">
            <input class="btn btn-primary" type="submit" value="Enviar">
            <a class="btn btn-danger" href="index.php?c=categoria&a=index">Cancelar</a>
        </div>
    </form>
</div>