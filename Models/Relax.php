<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Animale.php';


class Relax extends Prodotto {
    public $tipologia;
    public $materiale;
    public $taglia;

    public function __construct(Animale $_animale, $_prezzo, $_img, $_titolo, $_brand, $_materiale, $_tipologia, $_taglia)
    {
        parent::__construct($_animale, $_prezzo, $_img, $_titolo, $_brand);
        $this->materiale = $_materiale;
        $this->tipologia = $_tipologia;
        $this->taglia = $_taglia;
    }
}