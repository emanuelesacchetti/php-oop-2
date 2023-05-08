<?php

require_once __DIR__ . '/Animale.php';
require_once __DIR__ . '../../Traits/Pesabile.php';

class Prodotto {
    use Pesabile;

    public $prezzo;
    public $img;
    public $titolo;
    public $brand;
    public $categoria;
    public $animale;



    public function __construct(Animale $_animale, $_prezzo, $_img, $_titolo, $_brand, $_categoria)
    {
        $this->prezzo = $_prezzo;
        $this->img = $_img;
        $this->titolo = $_titolo;
        $this->brand = $_brand;
        $this->animale = $_animale;
        $this->categoria = $_categoria;
    }
}