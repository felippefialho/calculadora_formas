<?php

require_once "interface_formas.php";

class Retangulo implements Formas{
    private $base;
    private $altura;
    
    function __constructor($base,$altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    function setBase($base){
        $this->base = $base;
    }
    function getBase(){
        return $this->base;
    }
    function setAltura($altura){
        $this->altura = $altura;
    }
    function getAltura(){
        return $this->altura;
    }    
        
    function calcularArea(){
        return $this->base * $this->altura;
    }
    function calcularPerimetro(){
        return 2 * ($this->base + $this->altura);
    }
}