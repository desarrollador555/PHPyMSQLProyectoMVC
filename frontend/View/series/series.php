    <div class="container-fluid mb-4">
        
        <h1 class="title" style=" margin-left: 14px; margin-top: 100px; font-size: 24px;">Lista de Categorias</h1>

        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                    <?php foreach($categorias as $row): ?>
                        <a style="text-decoration: none;" href="index.php?c=series&a=index&categoria=<?= $row['id_categoria'] ?>" >
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $row['Nombre']?>
                            <span class="badge badge-primary badge-pill"><?=$row['Total']?></span>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cras justo odio
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
            </ul> -->

            <div class="col-sm-9">
                <div class="row">
                    <?php foreach($series as $row): ?>
                            <div class="col-sm-4 mb-4">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="<?= inicio.$row['s_pathimagen']?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $row['s_nombre']?></h5>
                                        <a href="index.php?c=series&a=view&id=<?= $row['id_serie'] ?>" class="btn btn-primary">Descargar</a>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>