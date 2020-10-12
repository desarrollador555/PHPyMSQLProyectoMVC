
<div class="container">
<div class="caja">
<a class="btn btn-danger mb-4" href="index.php?c=series&a=index" style="margin-top: 100px;" >Regresar</a> 
</div>
    
        
        <div class="card text-center">
            <div class="card-header">
                Detalles
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <img style="height:500px;" src="<?= inicio.$serie['s_pathimagen']?>" alt="">
                    </div>
                    <div class="col-sm">
                        <h5 class="card-title"><?= $serie['s_nombre']?></h5>
                        <p class="card-text"><?= $serie['s_descripcion']?></p>
                        <p class="card-text"><?= $this->model->getFknamecategoria($serie['s_fk_id_categoria'])?></p>
                    </div>
                </div>
                
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>

    <!--Inicio de apertado de temporadas-->
    
    <h1 class="title">Lista de temporadas</h1>
    <?php foreach($temporadas as $row): ?>

        <div id="accordion">
            <div class="card">
                <div class="card-header" id="<?= $row['id_temporada']?>">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#<?= $row['t_nombre']?>" aria-expanded="true" aria-controls="<?= $row['t_nombre']?>">
                    <?= $row['t_nombre']?>
                    </button>
                </h5>
                </div>

                <div id="<?= $row['t_nombre']?>" class="collapse" aria-labelledby="<?= $row['id_temporada']?>" data-parent="#accordion">
                    <div class="card-body">
                        <!--Inicio de los enlaces de descarga-->
                        <?php foreach($this->modelcapitulos->index($row['id_temporada']) as $row):?>
                            <div class="list-group">
                                <a target="_blank" href="<?= $row['c_urlEncriptada']?>" class="list-group-item list-group-item-action"><img width="100px" src="<?php echo inicio.$this->modelservidor->getimage($row['c_fk_Servidor'])?>" alt="dsfd"> 
                                 <?= $row['c_nombre']?>
                                </a>
                            </div>
                            
                        <?php endforeach;?>
                        <!--Fin de los enlaces de descarga-->
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

        <!--Fin de apartado de temporadas-->

        <!-- <table class="table table-striped mb-4">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($temporadas as $row): ?>
                <tr>
                    <th scope="row"><?= $row['id_temporada']?></th>
                    <td><?= $row['t_nombre']?></td>
                    <td><?= $this->modeltemporadas->getFKnameserie($row['t_fk_id_serie'])?></td>
                    <td><?= $this->modeltemporadas->getFKnameestatus($row['t_fk_id_estatus'])?></td>
                    <td class="acciones">
                        <a href="index.php?c=temporadas&a=view&id=<?= $row['id_temporada'] ?>" class="btn btn-primary">Ver</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table> -->

</div>
