<?php
    $acao = $_GET['acao'] ?? 'inicio';
    require_once __DIR__ . '/../app/controllers/PirataControler.php';

    $controller = new PirataControler();

    switch($acao){
        case 'inicio': 
             $controler->inicio(); break;
        case 'piratas':
            $controler-> listar(); break;
        case 'detalhe': die('detalhe'); break;
        default: http_response_code(404); die('Pagina não encontrado!!!');
    }

?>