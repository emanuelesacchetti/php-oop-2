<?php

require_once __DIR__ . '/Animale.php';

class Prodotto {
    public $prezzo;
    public $img;
    public $titolo;
    public $brand;

    public $animale;

    public function __construct(Animale $_animale, $_prezzo, $_img, $_titolo, $_brand)
    {
        $this->prezzo = $_prezzo;
        $this->img = $_img;
        $this->titolo = $_titolo;
        $this->brand = $_brand;
        $this->animale = $_animale;
    }
}