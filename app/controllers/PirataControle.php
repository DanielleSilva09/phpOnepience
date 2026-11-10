<?php

class PirataControler{

    public function inicio(): void{
        $titulo = "Grand Line Explorer";

      require __DIR__ . '/../../public/views/inicio.php';
    }


    public function listar(): void{
        $titulo = "Grand Line Explorer";

      require __DIR__ . '/../../public/views/piratas.php';
    }
}