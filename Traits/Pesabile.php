<?php

trait Pesabile {
    public $peso;
    protected $unitaMisura;

    public function ottieniPeso($peso){
        $this->peso = $peso;

    }

    public function settaPeso(){
        return $this->peso;
    }

    public function validazionePeso($peso){
        if (!is_numeric($peso)){
            throw new Exception('Valore peso di non valido');
        }
        return $peso;
    }
}