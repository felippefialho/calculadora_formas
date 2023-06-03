<?php

require_once "interface_formas.php";

class Triangulo implements Formas{
    private $lado1;
    private $lado2;
    private $lado3;
    private $s;

    function __constructor($lado1=null,$lado2=null,$lado3=null){
        $this->lado1=$lado1;
        $this->lado2=$lado2;
        $this->lado3=$lado3;
    }

    function getLado1(){
        return $this -> lado1;
    }
    function getLado2(){
        return $this -> lado2;
    }
    function getLado3(){
        return $this -> lado3;
    }
    function setLado1($lado1){
        $this-> lado1 = $lado1;
    }
    function setLado2($lado2){
        $this-> lado2 = $lado2;
    }
    function setLado3($lado3){
        $this-> lado3 = $lado3;
    }

    function calcularPerimetro(){
        return $this->lado1 + $this->lado2 + $this->lado3;
    }
    private function semiPerimetro(){
        $this->s = ($this->lado1 + $this->lado2 + $this->lado3)/2;
        return $this->s;
    }
    function calcularArea(){

        $this->semiPerimetro();
        
        $semi = ($this->s - $this->lado1)*($this->s - $this->lado2)*($this->s - $this->lado3);
        return sqrt($this->s * $semi);
    }


}