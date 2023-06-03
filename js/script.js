
const form = document.querySelector("form")
const radioTriangulo = document.querySelector("#triangulo")
const radioCirculo = document.querySelector("#circulo")
const radioRetangulo = document.querySelector("#retangulo")
const escolhaFormas = document.querySelector("fieldset")

form.removeChild(document.querySelector("#formRet"))
form.removeChild(document.querySelector("#formCirc"))
form.removeChild(document.querySelector("#formTri"))




function escolha(){
    if(radioTriangulo.checked && radioTriangulo.value==="triangulo"){
        form.insertAdjacentHTML('beforeend', '<fieldset id="formTri"><legend>Digite as medidas do triangulo</legend><label for="lado1">Lado 1: </label><input type="number" id="lado1" name="lado1"><label for="lado1">Lado2: </label><input type="number" id="lado2" name="lado2"><label for="lado1">Lado 3: </label><input type="number"id="lado3" name="lado3"></fieldset>')
    }else if(radioCirculo.checked && radioCirculo.value==="circulo"){
        form.insertAdjacentHTML('beforeend', '<fieldset id="formCirc"><legend>Digite o raio do circulo</legend><label for="raio">Raio: </label><input type="number" id="raio" name="raio"></fieldset>')
    }else {
        form.insertAdjacentHTML('beforeend', '<fieldset id="formRet"><legend>Digite as medidas do triangulo</legend><label for="base">Base: </label><input type="number" id="base" name="base"><label for="altura">Altura: </label><input type="number" id="altura" name="altura"></fieldset>')
    }    
}

escolhaFormas.addEventListener("input",escolha)





