<?php 

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '../../Traits/Pesabile.php';


class Animale {

    public $categoriaAnimale;
    public $icon;
    public $grandezzaIcona;

    public function __construct($_categoria, $_icon, $_grandezzaIcona){

        $this->categoriaAnimale = $_categoria;
        $this->icon = $_icon;
        $this->grandezzaIcona = $_grandezzaIcona;
    }
}