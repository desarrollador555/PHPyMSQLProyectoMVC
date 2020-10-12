<div class="container">
        <h1 class="title">Lista de Categorias</h1>
        <div class="fijo">
            <a href="index.php?c=categoria&a=create" class="btn btn-primary mb-4">Agregar</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($categorias as $row): ?>
                <tr>
                    <th scope="row"><?= $row['id_categoria']?></th>
                    <td><?= $row['ce_nombre']?></td>
                    <td class="acciones">
                        <a href="index.php?c=categoria&a=view&id=<?= $row['id_categoria'] ?>" class="btn btn-primary">Ver</a>
                        <a href="index.php?c=categoria&a=modificar&id=<?=$row['id_categoria'] ?>" class="btn btn-success">Actualizar</a>
                        <a href="index.php?c=categoria&a=eliminar&id=<?=$row['id_categoria'] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>