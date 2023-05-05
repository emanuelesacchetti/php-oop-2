<?php

require_once __DIR__ . './Iscrizione.php';
require_once __DIR__ . './Utente.php';

class UtenteIscritto extends Utente {

    public $iscrizione;

    
    public function __construct($_nome, $_cognome, $_indirizzo, Iscrizione $_iscrizione ){

        parent::__construct($_nome, $_cognome, $_indirizzo);
        $this->iscrizione = $_iscrizione;
    }

    public function getSconto(){
        if($iscrizione == true){
            $this->sconto = 20;
        }
    }
}