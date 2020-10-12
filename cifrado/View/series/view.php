<div class="container">

</div>
<div class="container">
    
        <table class="table table-striped mt-4">
            <tbody>
                <tr>
                    <th colspan="2">
                        <a class="btn btn-primary" href="index.php?c=series&a=index" >Regresar</a> 
                        Detalles de la serie
                    </th>
                </tr>
                <tr>
                    <th scope="col">Id</th><td><?= $serie['id_serie']?></td>
                </tr>
                <tr>
                    <th scope="col">Nombre</th><td><?= $serie['s_nombre']?></td>
                </tr>
                <tr>
                    <th scope="col">Imagen</th><td><img style="height:500px;" class="" src="<?= inicio.$serie['s_pathimagen']?>" alt=""></td>
                </tr>
                <tr>
                    <th scope="col">Descripcion</th><td><?= $serie['s_descripcion']?></td>
                </tr>
                <tr>
                    <th scope="col">Categoria</th><td><?= $this->model->getFknamecategoria($serie['s_fk_id_categoria'])?></td>
                </tr>
            </tbody>
        </table>
    
    
    <h1 class="title">Lista de temporadas</h1>
        <div class="fijo">
            <a href="index.php?c=temporadas&a=create&id=<?=$_GET['id']?>" class="btn btn-primary mb-4">Agregar</a>
        </div>
        <table class="table table-striped mb-4">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($temporadas as $row): ?>
                <tr>
                    <th scope="row"><?= $row['id_temporada']?></th>
                    <td><?= $row['t_nombre']?></td>
                    <td><?= $this->modeltemporadas->getFKnameserie($row['t_fk_id_serie'])?></td>
                    <td><?= $this->modeltemporadas->getFKnameestatus($row['t_fk_id_estatus'])?></td>
                    <td class="acciones">
                        <a href="index.php?c=temporadas&a=view&id=<?= $row['id_temporada'] ?>" class="btn btn-primary">Ver</a>
                        <a href="index.php?c=temporadas&a=modificar&id=<?=$row['id_temporada']?>" class="btn btn-success">Actualizar</a>
                        <a href="index.php?c=temporadas&a=eliminar&id=<?=$row['id_temporada']?>&serie=<?=$_GET['id'] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

</div>
