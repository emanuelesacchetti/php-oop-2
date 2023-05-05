<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Animale.php';


class Gioco extends Prodotto {
    public $tipologia;
    public $materiale;

    public function __construct(Animale $_animale, $_prezzo, $_img, $_titolo, $_brand, $_materiale, $_tipologia)
    {
        parent::__construct($_animale, $_prezzo, $_img, $_titolo, $_brand);
        $this->materiale = $_materiale;
        $this->tipologia = $_tipologia;
    }
}