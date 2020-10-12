<div class="container">
<h1 class="title">Editar nueva temporada</h1>
<form class="formulario" method="POST" action="index.php?c=temporadas&a=preparar&m=modificar">
    
    <input type="hidden" name="id" value="<?= $temporadas['id_temporada']?>" placeholder="Ingresa la temporada">
    
    <div class="form-group">
        <label for="exampleInputPassword1">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="<?= $temporadas['t_nombre']?>" placeholder="Ingresa la temporada" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <!-- <label for="serielist">Seleccione la serie</label> -->
        <input type="hidden" id="serielist" list="listaserie" value="<?= $temporadas['t_fk_id_serie']?>" name="serie" placeholder="Selecciona la serie" class="form-control">

        <datalist id="listaserie">
            <?php foreach($series as $row): ?>
                <option value="<?=$row['id_serie']?>"><?=$row['s_nombre']?></option>
            <?php endforeach; ?>
        </datalist>
    </div>
    <div class="form-group">
        <label for="estatuslist">Seleccione un estatus</label>
        <input list="listaestatus" class="form-control" id="estatuslist" name="estatus" placeholder="Ingresa el estatus" value="<?= $temporadas['t_fk_id_estatus']?>">
        <datalist id="listaestatus">
            <?php foreach($estatus as $row): ?>
                <option value="<?=$row['id_estatus']?>"><?=$row['e_nombre']?></option>
            <?php endforeach; ?>
        </datalist>
    </div>
    <div class="botones">
        <input class="btn btn-primary" type="submit" value="Enviar">
        <a class="btn btn-danger" href="index.php?c=series&a=view&id=<?= $temporadas['t_fk_id_serie']?> ?>">Cancelar</a>
    </div>
</form>
</div>