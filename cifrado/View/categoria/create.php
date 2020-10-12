<div class="container">
    <h1 class="title">Añadir nueva categoria</h1>

    <form class="formulario" method="POST" action="index.php?c=categoria&a=preparar">
        <div class="form-group">
            <label for="categoria">Nombre</label>
            <input type="text" class="form-control" id="categoria" name="nombre" placeholder="Ingresa la categoria">        
        </div>
        <div class="botones">
            <input class="btn btn-primary" type="submit" value="Enviar">
            <a class="btn btn-danger" href="index.php?c=categoria&a=index">Cancelar</a>
        </div>
    </form>

</div>