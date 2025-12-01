<div class="paginacao">
    <div>
        <button class="botaoEsquerda">&#9664</button>
    </div>
    <div class="botoesPaginacao">
        <?php for($page_number = 1; $page_number <= 4; $page_number++): ?>
            <button>
                <a class="botaoPaginacao <?= $page_number == 3 ? "active" : "" ?> " href="?paginacaoNumero=<?= $page_number?>">
                    <?= $page_number ?>
                </a>
            </button>
        <?php endfor ?>
    </div>
    <div>
        <button  class="botaoDireita">&#9654</button>
    </div>
</div>