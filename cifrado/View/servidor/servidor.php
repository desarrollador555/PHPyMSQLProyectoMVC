    <div class="container">
        <h1 class="title">Lista de servidores</h1>
        <div class="fijo">
            <a href="index.php?c=servidor&a=create" class="btn btn-primary mb-4">Agregar</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($servidor as $row): ?>
                <tr>
                    <th scope="row"><?= $row['id_servidor']?></th>
                    <td><?= $row['se_nombre']?></td>
                    <td><img class="img-thumbnail" style="width: 200px;" src="<?= inicio.$row['se_dir_imagen']?>" alt="<?= $row['se_nombre']?>"></td>
                    <td class="acciones">
                        <a href="index.php?c=servidor&a=view&id=<?= $row['id_servidor'] ?>" class="btn btn-primary">Ver</a>
                        <a href="index.php?c=servidor&a=modificar&id=<?=$row['id_servidor'] ?>" class="btn btn-success">Actualizar</a>
                        <a href="index.php?c=servidor&a=eliminar&id=<?=$row['id_servidor'] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>