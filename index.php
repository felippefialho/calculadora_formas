<?php

require_once "class_circulo.php";
require_once "class_retangulo.php";
require_once "class_triangulo.php";
require_once "interface_formas.php";

$resultArea=null;
$resultPerimetro=null;

if(isset($_POST['formas'])){
    $forma = $_POST['formas'];    

    if($forma == "triangulo"){
        $triangulo = new Triangulo();
        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $lado3 = $_POST["lado3"];
        $triangulo->setLado1($lado1);
        $triangulo->setLado2($lado2);
        $triangulo->setLado3($lado3);        
        $resultPerimetro = number_format($triangulo->calcularPerimetro(),2,",","."); 
        $resultArea = number_format($triangulo->calcularArea(),2,",","."); 

    }else if($forma == "circulo"){
        $circulo = new Circulo();
        $raio = $_POST["raio"];
        $circulo->setRaio($raio);
        $resultPerimetro = number_format($circulo->calcularPerimetro(),2,",","."); 
        $resultArea = number_format($circulo->calcularArea(),2,",","."); 


    }else {
        $retangulo = new Retangulo();
        $base = $_POST["base"];
        $altura = $_POST["altura"];
        $retangulo->setBase($base);
        $retangulo->setAltura($altura);
        $resultPerimetro = number_format($retangulo->calcularPerimetro(),2,",","."); 
        $resultArea = number_format($retangulo->calcularArea(),2,",","."); 
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="js/script.js" defer></script>
    <title>Document</title>
</head>
<style>
    .material-symbols-outlined {
    font-variation-settings:
    'FILL' 1,
    'wght' 400,
    'GRAD' 0,
    'opsz' 48;
    color: #123884;
    font-size:4.5rem;
    vertical-align: middle;    
    }
    label{
    margin-left: 1.5rem;
    }
    button{
        margin: 2rem 0rem;
    }
    #result{
        width: 400px;
        height: 200px;
        border:  1px solid grey;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 2rem;
        margin-top: 1rem;
        font-size: 1.5rem; 
    }

</style>
<body>
    <h2>Calculadora de Formas Geometricas</h2>
    <form id="form" action="index.php" method="post" name="form">
        <fieldset id="radio">
            <legend>Escolha a forma geometrica: </legend>            
            <label for="triangulo"><span class="material-symbols-outlined">change_history</span></label>            
            <input type="radio" name="formas" id="triangulo" value="triangulo" required>
            <label for="circulo"><span class="material-symbols-outlined">radio_button_unchecked</span></label>
            <input type="radio" name="formas" id="circulo" value="circulo" required>
            <label for="retangulo"><span class="material-symbols-outlined">rectangle</span></label>
            <input type="radio" name="formas" id="retangulo" value="retangulo" required>
        </fieldset>
        <fieldset id="formTri">
            <legend>Digite as medidas do triangulo</legend>
            <label for="lado1">Lado 1: </label>
            <input type="number" id="lado1" name="lado1">
            <label for="lado1">Lado 2: </label>
            <input type="number" id="lado2" name="lado2">
            <label for="lado1">Lado 3: </label>
            <input type="number" id="lado3" name="lado3">
        </fieldset>
        <fieldset id="formCirc">
            <legend>Digite o raio do circulo</legend>
            <label for="raio">Raio: </label>
            <input type="number" id="raio" name="raio">
        </fieldset>
        <fieldset id="formRet">
            <legend>Digite as medidas do triangulo</legend>
            <label for="base">Base: </label>
            <input type="number" id="base" name="base">
            <label for="altura">Altura: </label>
            <input type="number" id="altura" name="altura">
        </fieldset>
        <button type="submit">Calcular</button>        
    </form>

    <div id="result">
        <p>Perimetro = <?= $resultPerimetro; ?></p>
        <br>
        <p>Area = <?= $resultArea; ?></p>
    </div>

    
</body>
</html>