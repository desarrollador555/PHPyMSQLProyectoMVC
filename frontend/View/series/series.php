    <div class="container-fluid">
        
        <h1 class="title" style="margin-top: 100px;">Lista de Series</h1>

        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                    <?php foreach($series as $row): ?>
                        <a href="index.php?c=series&a=view&id=<?= $row['id_serie'] ?>" class="list-group-item list-group-item-action"><?= $row['s_nombre']?></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="row">
                    <?php foreach($series as $row): ?>
                            <div class="col-sm-4">
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