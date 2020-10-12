<div class="container">
<h1 class="title">Editar la serie</h1>
<form class="formulario" enctype="multipart/form-data" method="POST" action="index.php?c=series&a=preparar&m=modificar">
    <input type="hidden" name="id" value="<?= $serie['id_serie']?>" placeholder="Ingresa el nombre de la serie">
    
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $serie['s_nombre']?>" placeholder="Ingresa el nombre de la serie">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descripcion</label>
        <textarea name="descripcion" placeholder="Ingresar descripcion"  class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $serie['s_descripcion']?></textarea>
    </div>

    <input type="hidden" name="imagensubido" value="<?= $serie['s_imagen']?>">

    <div class="form-group">
        <label for="exampleFormControlFile1">Seleccione la imagen</label>
        <input type="file" name="imagen" accept=".png,.jpeg,.jpg,.svg" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
        <label for="opciones">Seleccione una categoria</label>
        <input name="categoria" value="<?= $serie['s_fk_id_categoria']?>" class="form-control" id="opciones" list="lista" placeholder="Selecione una categoria">
        
        <datalist id="lista">
            <?php foreach($categorias as $row): ?>
            <option value="<?= $row['id_categoria']?>"><?= $row['ce_nombre']?></option>
            <?php endforeach; ?>
        </datalist>
    </div>

    <div class="botones">
        <input class="btn btn-primary" type="submit" value="Enviar">
        <a class="btn btn-danger" href="index.php?c=series&a=index">Cancelar</a>
    </div>
</form>
</div>