<div class="container text-center p-5">
    <img class="mb-5" src="imgs/mega-sena-logo.png" alt="lgo da mega-sena" width="400">

    <p class="fs-1">
        Concurso:
        <span class="badge bg-success"><?=$resuldado['numero']?></span>
    </p>

    <p class="fs-4">
        Data de apuração:
        <span class="badge bg-success"><?=$resuldado['dataApuracao']?></span>
    </p>

    <p class="fs-4">
        Resultado:
        <span class="badge bg-success"><?=($resuldado['acumulado'] ? 'Acumulado' : 'Premiado')?></span>
    </p>

    <p class="fs-3 mt-5 fw-bold">
        Dezenas sorteadas:
        <div class="d-flex justify-content-center">
            <?php
                foreach ($resuldado['listaDezenas'] as $dezena) {
                    echo '<span class="dezenas">'.$dezena.'</span>';
                }
            ?>
        </div>
    </p>
</div>