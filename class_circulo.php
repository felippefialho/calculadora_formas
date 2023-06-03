<?php

require_once "interface_formas.php";

class Circulo implements Formas{
    
    private $raio;

    function __constructor($raio=null){
        $this->raio = $raio;
    }

    function getRaio(){
        return $this->raio;
    }
    function setRaio($raio){
        $this->raio = $raio;
    }
       
    function calcularArea(){
        return M_PI * $this->raio**2;
    }
    function calcularPerimetro(){
        return 2*M_PI*$this->raio;
    }
}