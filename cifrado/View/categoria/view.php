<div class="container">
        <table class="table table-striped mt-4">
            <tbody>
                <tr>
                    <th colspan="2">
                        <a class="btn btn-primary" href="index.php?c=categoria&a=index" >Regresar</a> 
                        Detalles del elemento
                    </th>
                </tr>
                <tr>
                    <th scope="row">Id</th><td><?= $categoria['id_categoria']?></td>
                </tr>
                <tr>
                    <th>Nombre</th><td><?= $categoria['ce_nombre']?></td>
                </tr>
            </tbody>
        </table>
</div>