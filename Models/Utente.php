<?php

class Utente {

    public $nome;
    public $cognome;
    public $indirizzo;
    public $sconto = 0;
    
    public function __construct($_nome, $_cognome, $_indirizzo){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->indirizzo = $_indirizzo;
    }

    public function setSconto(){
        if($this->iscrizione){
            $this->sconto = 20;
        }
    }
}