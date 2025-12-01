<div class="paginacao">
    <div>
        <button class="botaoEsquerda <?= $page <= 1 ? "disabled" : "" ?>">
            <a href="?paginacaoNumero=<? $page - 1 ?>">&#9664</a>
        </button>
    </div>
    <div class="botoesPaginacao">
        <?php for($page_number = 1; $page_number <= $total_pages; $page_number++): ?>
            <button>
                <a class="botaoPaginacao <?= $page_number == $page ? "active" : "" ?> " href="?paginacaoNumero=<?= $page_number?>">
                    <?= $page_number ?>
                </a>
            </button>
        <?php endfor ?>
    </div>
    <div>
        <button  class="botaoDireita <?= $page <= $total_pages ? "disabled" : "" ?>">
            <a href="?paginacaoNumero=<? $page + 1 ?>">&#9654</a>
        </button>
    </div>
</div>