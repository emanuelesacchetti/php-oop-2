<?php

trait Pesabile {
    protected $peso;
    protected $unitaMisura;

    public function ottieniPeso($peso, $unitaMisura){
        $this->peso = $peso;
        $this->unitaMisura = $unitaMisura;
    }

    public function settaPeso(){
        return $this->peso . ' ' . $this->unitaMisura;
    }
}