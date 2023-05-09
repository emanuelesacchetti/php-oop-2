<?php 

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '../../Traits/Pesabile.php';
require_once __DIR__ . '/Misura.php';

class Animale {

    public $categoriaAnimale;
    public $icon;
    public $misura;

    public function __construct($_categoria, $_icon, Misura $_misura){

        $this->categoriaAnimale = $_categoria;
        $this->icon = $_icon;
        $this->misura = $_misura;
    }
}