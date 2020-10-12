    <div class="container">
        <h1 class="title">Lista de estatus</h1>
        <div class="fijo">
            <a href="index.php?c=estatus&a=create" class="btn btn-primary mb-4">Agregar</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($estatus as $row): ?>
                    <tr>
                        <th><?= $row['id_estatus']?></th>
                        <td><?= $row['e_nombre']?></td>
                        <td class="acciones">
                            <a href="index.php?c=estatus&a=view&id=<?= $row['id_estatus'] ?>" class="btn btn-primary">Ver</a>
                            <a href="index.php?c=estatus&a=modificar&id=<?=$row['id_estatus'] ?>" class="btn btn-success">Actualizar</a>
                            <a href="index.php?c=estatus&a=eliminar&id=<?=$row['id_estatus'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>