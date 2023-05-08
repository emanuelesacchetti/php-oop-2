<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Animale.php';

class Cibo extends Prodotto {
    public $etaDestinazione;
    public $tipologia;
    public $gusto;
    

    public function __construct(Animale $_animale, $_prezzo, $_img, $_titolo, $_brand, $_categoria, $_eta, $_tipologia, $_gusto)
    {
        parent::__construct($_animale, $_prezzo, $_img, $_titolo, $_brand, $_categoria);
        $this->etaDestinazione = $_eta;
        $this->tipologia = $_tipologia;
        $this->gusto = $_gusto;
    }
}