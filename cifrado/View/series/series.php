    <div class="container">
        <h1 class="title">Lista de Series</h1>
            <a href="index.php?c=series&a=create" class="btn btn-primary mb-4">Agregar</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($series as $row): ?>
                <tr>
                    <th scope="row"><?= $row['id_serie']?></th>
                    <td><?= $row['s_nombre']?></td>
                    <td><?= $row['s_descripcion']?></td>
                    <td><img style="width: 200px; height=200px;" class="img-thumbnail" src="../<?= $row['s_pathimagen']?>" alt=""></td>
                    <td><?= $this->model->getFknamecategoria($row['s_fk_id_categoria'])?></td>
                    <td class="acciones">
                        <a href="index.php?c=series&a=view&id=<?= $row['id_serie'] ?>" class="btn btn-primary">Ver</a>
                        <a href="index.php?c=series&a=modificar&id=<?=$row['id_serie'] ?>" class="btn btn-success">Actualizar</a>
                        <a href="index.php?c=series&a=eliminar&id=<?=$row['id_serie'] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>