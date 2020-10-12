    <div class="container">
        <h1 class="title">Lista de capitulos</h1>
        <div class="fijo">
            <a href="index.php?c=capitulos&a=create" class="btn btnprimary">Agregar</a>
        </div>
        <table class="tabla">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Servidor</th>
                    <th>URL</th>
                    <th>URL Encriptada</th>
                    <th>Temporada</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($capitulos as $row): ?>
                <tr>
                    <td><?= $row['id_capitulo']?></td>
                    <td><?= $row['c_nombre']?></td>
                    <td><?= $row['c_fk_Servidor']?></td>
                    <td><?= $row['c_url']?></td>
                    <td><?= $row['c_urlEncriptada']?></td>
                    <td><?= $row['c_fk_id_temporada']?></td>
                    <td class="acciones">
                        <a href="index.php?c=capitulos&a=view&id=<?= $row['id_capitulo'] ?>" class="btn btnprimary">Ver</a>
                        <a href="index.php?c=capitulos&a=modificar&id=<?=$row['id_capitulo'] ?>" class="btn btnsuccess">Actualizar</a>
                        <a href="index.php?c=capitulos&a=eliminar&id=<?=$row['id_capitulo'] ?>" class="btn btndanger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>