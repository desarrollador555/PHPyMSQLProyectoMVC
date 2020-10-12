<div class="container">
    <h1 class="title">Editar el Servidor</h1>
    <form class="formulario" enctype="multipart/form-data" method="POST" action="index.php?c=servidor&a=preparar&m=modificar">
        
        <input type="hidden" name="id" value="<?= $servidor['id_servidor']?>">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control" name="nombre" value="<?= $servidor['se_nombre']?>" placeholder="Ingresa el servidor">
        </div>
        
        <input type="hidden" name="imgsubida" value="<?= $servidor['se_imagen']?>">

        <input type="hidden" name="dirimagen" value="<?= $servidor['se_dir_imagen']?>">
        
        <div class="form-group">
            <label for="imagen">Selecione una imagen</label>
            <input type="file" id="imagen" class="form-control-file" name="imagen"  accept=".jpg,.png,.jpeg" id="">
        </div>
        
        <div class="botones">
            <input class="btn btn-primary" type="submit" value="Enviar">
            <a class="btn btn-danger" href="index.php?c=servidor&a=index">Cancelar</a>
        </div>
    </form>
</div>