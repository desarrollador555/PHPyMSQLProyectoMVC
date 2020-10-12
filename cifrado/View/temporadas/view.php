<div class="container">
        <table class="table table-bordered mt-4">
            <tbody>
                <tr>
                    <th colspan="2">
                        <a class="btn btn-primary" href="index.php?c=series&a=view&id=<?= $temporadas['t_fk_id_serie'] ?>" >Regresar</a> 
                        Detalles del elemento
                    </th>
                </tr>
                <tr>
                    <th colspan="row">Id</th><td><?= $temporadas['id_temporada']?></td>
                </tr>
                <tr>
                    <th colspan="row">Nombre</th><td><?= $temporadas['t_nombre']?></td>
                </tr>
                <tr>
                    <th colspan="row">Serie</th><td><?= $this->model->getFKnameserie($temporadas['t_fk_id_serie'])?></td>
                </tr>
                <tr>
                    <th colspan="row">Estatus</th><td><?= $this->model->getFKnameestatus($temporadas['t_fk_id_estatus'])?></td>
                </tr>
            </tbody>
        </table>
    <h1 class="title">Lista de capitulos</h1>
        <div class="fijo">
            <a href="index.php?c=capitulos&a=create&id=<?= $temporadas['id_temporada'] ?>" class="btn btn-primary">Agregar</a>
        </div>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Servidor</th>
                    <th scope="col">URL</th>
                    <th scope="col">URL Encriptada</th>
                    <th scope="col">Temporada</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($capitulos as $row): ?>
                <tr>
                    <th colspan="row"><?= $row['id_capitulo']?></th>
                    <td><?= $row['c_nombre']?></td>
                    <td><?= $row['c_fk_Servidor']?></td>
                    <td><?= $row['c_url']?></td>
                    <td><?= $row['c_urlEncriptada']?></td>
                    <td><?= $row['c_fk_id_temporada']?></td>
                    <td class="acciones">
                        <a href="index.php?c=capitulos&a=view&id=<?= $row['id_capitulo'] ?>" class="btn btn-primary">Ver</a>
                        <a href="index.php?c=capitulos&a=modificar&id=<?=$row['id_capitulo'] ?>" class="btn btn-success">Actualizar</a>
                        <a href="index.php?c=capitulos&a=eliminar&id=<?=$row['id_capitulo'] ?>&temporada=<?=$row['c_fk_id_temporada']?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>
