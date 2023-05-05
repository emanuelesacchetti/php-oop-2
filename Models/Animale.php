<?php 

require_once __DIR__ . '/Prodotto.php';

class Animale {

    public $categoriaAnimale;
    public $icon;

    public function __construct($_categoria, $_icon){

        $this->categoriaAnimale = $_categoria;
        $this->icon = $_icon;
    }
}