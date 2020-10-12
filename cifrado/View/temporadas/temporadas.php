    <div class="container">
        <h1 class="title">Lista de temporadas</h1>
        <div class="fijo">
            <a href="index.php?c=temporadas&a=create&id=<?=$_GET['id']?>" class="btn btnprimary">Agregar</a>
        </div>
        <table class="tabla">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Serie</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($temporadas as $row): ?>
                <tr>
                    <td><?= $row['id_temporada']?></td>
                    <td><?= $row['t_nombre']?></td>
                    <td><?= $this->model->getFKnameserie($row['t_fk_id_serie'])?></td>
                    <td><?= $this->model->getFKnameestatus($row['t_fk_id_estatus'])?></td>

                    <td class="acciones">
                        <a href="index.php?c=temporadas&a=view&id=<?= $row['id_temporada'] ?>" class="btn btnprimary">Ver</a>
                        <a href="index.php?c=temporadas&a=modificar&id=<?=$row['id_temporada'] ?>" class="btn btnsuccess">Actualizar</a>
                        <a href="index.php?c=temporadas&a=eliminar&id=<?=$row['id_temporada'] ?>" class="btn btndanger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>