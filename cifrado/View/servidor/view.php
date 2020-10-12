<div class="container">
    <div class="individual">
        <div class="elemento">
            
        </div>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th colspan="2">
                        <a class="btn btn-primary" href="index.php?c=servidor&a=index" >Regresar</a> 
                        Detalles del elemento
                    </th>
                </tr>
                <tr>
                    <th scope="row">Id</th><td><?= $servidor['id_servidor']?></td>
                </tr>
                <tr>
                    <th scope="row">Nombre</th><td><?= $servidor['se_nombre']?></td>
                </tr>
                <tr>
                    <th scope="row">Imagen</th><td><img class="img-thumbnail" style="height: auto; width: 200px;" src="<?= inicio.$servidor['se_dir_imagen']?>" alt="<?= $servidor['se_nombre']?>"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
