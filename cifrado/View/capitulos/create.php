<div class="container">
<h1 class="title">Añadir nuevo capitulo</h1>
<form class="formulario" method="POST" action="index.php?c=capitulos&a=preparar&s=subir">
    
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Ingresa los capitulos Ej: capitulo 02 - 02">
    </div>
    <div class="form-group">
        <label for="servidor">Servidor</label>
        <input list="listaServidor" id="servidor" class="form-control" name="servidor" placeholder="Selecciona el servidor">
        
        <datalist id="listaServidor">
            <?php foreach($servidores as $row): ?>
            <option hidden value="<?= $row['id_servidor']?>"><?= $row['se_nombre']?></option>
            <?php endforeach; ?>
        </datalist>
    </div>
    
    <div class="form-group">
        <label for="url">Url</label>
        <input type="text" class="form-control" id="url" name="url" placeholder="Ingresa el url puro">
    </div>
    <div class="form-group">
        <label for="urlencrip">Url Encriptada</label>
        <input type="text" id="urlencrip" class="form-control" name="urlencriptada" placeholder="Ingresa el url Encriptada">
    </div>
    <div class="form-group">
        <!-- <label for="temporadas">Selecione la temporada</label> -->
        <input  type="hidden" list="listaTemporadas" id="temporadas" class="form-control" value="<?=$_GET['id']?>" name="temporada" placeholder="Ingresa la temporada">
        
        <datalist id="listaTemporadas">
            <?php foreach($listaTemporadas as $row): ?>
            <option  value="<?= $row['id_temporada']?>"><?= $row['t_nombre']?></option>
            <?php endforeach; ?>
        </datalist>
    </div>
    
    
    <div class="">
        <input class="btn btn-primary" type="submit" value="Enviar">
        <a class="btn btn-danger" href="index.php?c=temporadas&a=view&id=<?=$_GET['id']?>">Cancelar</a>
    </div>
</form>
</div>