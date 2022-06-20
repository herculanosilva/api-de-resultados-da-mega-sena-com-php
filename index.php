<?php

// AUTOLOAD DE CLASSES DP COMPOSER
require __DIR__.'/vendor/autoload.php';

//DEPENDENCIAS DO PROJETO
use \App\Caixa\Loteria;

// CONCURSO
$concurso = $_GET['concurso'] ?? null;

// EXECUTA A CONSULTA DOS DADOS DO CONCURSO
$resuldado = Loteria::consultarResultado('megasena', $concurso);

// HEADER
include __DIR__.'/includes/header.php';

// CORPO DA PAGINA
include isset($resuldado['numero']) ? 
        __DIR__.'/includes/result.php' :
        __DIR__.'/includes/error.php';

// FOOTER
include __DIR__.'/includes/footer.php';
