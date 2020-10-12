<div class="container">
<h1 class="title">Editar capitulo</h1>
<form class="formulario" method="POST" action="index.php?c=capitulos&a=preparar&m=modificar">
    
    <input type="hidden" name="id" value="<?= $capitulos['id_capitulo']?>">

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" class="form-control" name="nombre" value="<?= $capitulos['c_nombre']?>" placeholder="Ingresa los capitulos Ej: capitulo 02 - 02">
    </div>
    <div class="form-group">
        <label for="servidor">Servidor</label>
        <input list="listaServidor" id="servidor" class="form-control" value="<?= $capitulos['c_fk_Servidor']?>" name="servidor" placeholder="Selecciona el servidor">
        
        <datalist id="listaServidor">
            <?php foreach($servidores as $row): ?>
            <option hidden value="<?= $row['id_servidor']?>"><?= $row['se_nombre']?></option>
            <?php endforeach; ?>
        </datalist>
    </div>
    <div class="form-group">
        <label for="url">Url</label>
        <input type="text" id="url" class="form-control" name="url" value="<?= $capitulos['c_url']?>" placeholder="Ingresa el url puro">
    </div>
    
    <div class="form-group">
        <label for="urlE">Url Encriptada</label>
        <input type="text" name="urlencriptada" id="urlE" class="form-control" value="<?= $capitulos['c_urlEncriptada']?>" placeholder="Ingresa el url Encriptada">
    </div>
    <div class="form-group">
        <!-- <label for="tempo">Temporada</label> -->
        <input id="tempo" class="form-control" type="hidden" list="listaTemporadas" name="temporada" value="<?= $capitulos['c_fk_id_temporada']?>" placeholder="Ingresa la temporada">
        <datalist id="listaTemporadas">
            <?php foreach($listaTemporadas as $row): ?>
            <option  value="<?= $row['id_temporada']?>"><?= $row['t_nombre']?></option>
            <?php endforeach; ?>
        </datalist>
    </div>
    
    <div class="">
        <input class="btn btn-primary" type="submit" value="Enviar">
        <a class="btn btn-danger" href="index.php?c=capitulos&a=index">Cancelar</a>
    </div>
</form>
</div>