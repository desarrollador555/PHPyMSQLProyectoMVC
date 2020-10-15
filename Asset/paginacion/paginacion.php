<div class="container">
    <nav aria-label="...">
            <ul class="pagination">
                    <?php if($paginaA<=1): ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="?c=<?= (!empty($_GET['c']))?$_GET['c']:"series" ?>&a=index&p=<?= $paginaA-1?>" tabindex="-1">Previous</a>
                        </li>
                    <?php else: ?>
                        <li class="page-item">
                            <a class="page-link" href="?c=<?= (!empty($_GET['c']))?$_GET['c']:"series" ?>&a=index&p=<?= $paginaA-1?>" tabindex="-1">Previous</a>
                        </li>
                    <?php endif; ?>

                    <?php for($i=1;$i<=$totalPaginas;$i++): ?>
                
                    <?php if($paginaA==$i):?>
                        <li class="page-item active">
                            <a class="page-link" href="?c=<?= (!empty($_GET['c']))?$_GET['c']:"series" ?>&a=index&p=<?=$i?>"><?=$i?> <span class="sr-only">(current)</span></a>
                        </li>
                    <?php else: ?>
                        <li class="page-item"><a class="page-link" href="?c=<?= (!empty($_GET['c']))?$_GET['c']:"series" ?>&a=index&p=<?=$i?>"><?=$i?></a></li>
                    <?php endif; ?>
                
                    <?php endfor; ?>
                
                    <?php if($paginaA>=$totalPaginas): ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="?c=<?= (!empty($_GET['c']))?$_GET['c']:"series" ?>&a=index&p=<?= $paginaA+1?>" tabindex="+1">Next</a>
                        </li>
                    <?php else: ?>
                        <li class="page-item">
                            <a class="page-link" href="?c=<?= (!empty($_GET['c']))?$_GET['c']:"series" ?>&a=index&p=<?= $paginaA+1?>" tabindex="+1">Next</a>
                        </li>
                    <?php endif; ?>
            </ul>
    </nav>
</div>