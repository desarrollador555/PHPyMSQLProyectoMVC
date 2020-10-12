<div class="container">
    <h1 class="title">Añadir nuevo estatus</h1>
    <form class="formulario" method="POST" action="index.php?c=estatus&a=preparar">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Ingresa el estatus">
        </div>
        <div class="">
            <input class="btn btn-primary" type="submit" value="Enviar">
            <a class="btn btn-danger" href="index.php?c=estatus&a=index">Cancelar</a>
        </div>
    </form>
</div>