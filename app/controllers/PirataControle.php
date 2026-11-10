<?php

class PirataControler{
    private fuction dados(): array {
        return require __DIR__ . '/../data/piratas.php';
    }
    public function inicio(): void{
        $titulo = "Grand Line Explorer";

      require __DIR__ . '/../../public/views/inicio.php';
    }


    public function listar(): void{
        $titulo = "Grand Line Explorer";

        $piratas = $this->dados();

        $pesquisa = '';

      require __DIR__ . '/../../public/views/piratas.php';
    }
}