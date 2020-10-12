<div class="container">
<h1 class="title">Añadir nuevo Servidor</h1>
<form class="formulario" enctype="multipart/form-data" method="POST" action="index.php?c=servidor&a=preparar&s=subir">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Ingresa el servidor">
    </div>
    <div class="form-group">
        <label for="imagen">Seleccione la imagen</label>
        <input type="file" id="imagen" class="form-control-file" accept=".jpg,.png,.jpeg" name="imagen" id="">
    </div>
    <div class="">
        <input class="btn btn-primary" type="submit" value="Enviar">
        <a class="btn btn-danger" href="index.php?c=servidor&a=index">Cancelar</a>
    </div>
</form>
</div>