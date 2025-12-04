<div class="paginacao">
    <div>
        <a class="botaoEsquerda " href="?paginacaoNumero=<?= $page - 1?>">
            &#9664
        </a>
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
        <a class="botaoDireita" href="?paginacaoNumero=<?= $page + 1?>">
            &#9654
        </a>
    </div>
</div>