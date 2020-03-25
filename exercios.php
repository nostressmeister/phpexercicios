<?php

// Escreva um algoritmo que leia um número e mostre seu inteiro
function numInteiro($num){
    $numero = intval($num);
    echo "O numero $num na sua forma inteira é representado por $numero.<br>";
    return $numero;
}
numInteiro(7.4);
echo("-------------------------------------------------------------------------------------<br>");


// Faça um algoritmo que leia o nome e as 
// idades de duas pessoas e mostre asoma das idades.

function exibeSoma ($nom1,$idade1, $nom2,$idade2){
    $result = 0;
    $result = $idade1+$idade2; 
    echo "Soma idades: $result <br>";
    // return $result;
}
exibeSoma("Marcelo",30,"Marcelo",20);
echo("-------------------------------------------------------------------------------------<br>");

// Repita o exercício anterior, porém, mostrando a frase abaixo, 
// substituindo aslacunas pelas informações obtidas no sistema.  
// A soma das idades de XXXXX e XXXXX é XXXXX. Onde cada XXXXX 
// corresponde aos nomes e a soma das idades.

function exibeCompl ($nom1,$idade1, $nom2,$idade2){
    $result = 0;
    $result = $idade1+$idade2; 
    echo "A Soma das idades de $nom1 e $nom2 é $result <br>";
    return $result;
}
exibeCompl("Marcelo",30,"João",20);    
echo("-------------------------------------------------------------------------------------<br>");

// Escreva um algoritmo que leia dois números que deverão ser colocados, respectivamente, nas 
// variáveis   VA  e   VB.   
// O algoritmo deve, então, trocar osvalores de
// VA por VB e vice-versa e mostrar o conteúdo destas variáveis.

function trocarValor($va, $vb){
    echo $va.", ".$vb."<br>";
    $vc = $vb;
    $vb = $va;
    $va = $vc;
    echo "Valor de VA: $va e valor de VB:  $vb<br>";
    return $va." ".$vb;
}
trocarValor(2,4);
echo("-------------------------------------------------------------------------------------<br>");

// Faça um algoritmo que leia valores para as variáveis A, B e C e   
// mostre o resultado da seguinte expressão:( A – B ) * C

function calcula($valA, $valB, $valC){
    $total = (($valA - $valB) * $valC);
    echo "$total <--  Resultado de (10-5)* 2 <br>";
    return $total;
}

calcula(10,5,2); 
echo("-------------------------------------------------------------------------------------<br>");

// Escrever um algoritmo para ler uma temperatura em Fahrenheit e apresentá-la
// convertida em graus Centígrados.
// (Fahrenheit – 32) x 5 / 9

function converteTemp($temperatura){
    $resultado = (($temperatura - 32)*5)/9;
    echo "A temperatura de $temperatura °F, é equivalente à $resultado °C.<br>";
    return $resultado;
}

converteTemp(50);
echo("-------------------------------------------------------------------------------------<br>");

// Maria quer saber quantos litros de gasolina precisa colocar em seu   
// carro e quanto vai gastar para fazer uma viagem até a casa de sua irmã.
// Dados extras:
// -Distância da casa de Maria até sua irmã : 520 km
// -Seu carro consome 12 litros de gasolina por Km/rodado.
// -Ela abastece sempre no mesmo posto, onde o preço da gasolina é R$ 1,50o litro.

// s

function calculaConsumo($kmTotal, $litroKM, $valorLittro){

    $result = ($kmTotal * $litroKM)*$valorLittro;
    echo "Maria irá gastar R$$result,00 de gasolina nessa viagem.<br>";
    return $result;
}

calculaConsumo(520, 12, 1.50);
echo("-------------------------------------------------------------------------------------<br>");

// Escreva um algoritmo para ler um valor inteiro   
// em segundos, e depoisconverter e mostrá-lo no formato hh:mm:ss

function converteTime($num = "0"){
    $umDia = 86400;
    $result = 0;
    if($num < $umDia){
    $result =  gmdate("H:i:s", $num);
    echo "Convertendo $num em date (HH:MM:SS) => $result<br>";
    }else {
        echo "Valor (".$num.") não suportado =/<br>";
    }
    return $result;
}
converteTime(1800);
echo("-------------------------------------------------------------------------------------<br>");

function todos(){
    echo "Função que chama outras funções: <br>";
    numInteiro(7.4);
    exibeSoma("Marcelo",30,"Marcelo",20);
    exibeCompl("Marcelo",30,"João",20); 
    trocarValor(2,4);
    calcula(10,5,2); 
    converteTemp(50);
    calculaConsumo(520, 12, 1.50);
    converteTime(1800);
}

todos();
echo("-------------------------------------------------------------------------------------<br>");

// 1) Crie um algoritmo que receba um número digitado pelo usuário e verifique 
// se esse valor é positivo, negativo ou igual a zero. A saída deve ser:
// "Valor Positivo", "Valor Negativo" ou "Igual a Zero".

function validaNumero($num){
    $num = $_GET["num"];

    if($num > 0){
        echo "$num é um: Valor Positivo <br>";
    } else if ($num < 0){
        echo "$num é um: Valor Negativo <br>";
    }else {
        echo "$num é Igual a Zero <br>";
    }
}
echo "Variavel no browser: http://localhost/php1/exercios.php?num=X<br>";

@validaNumero($num);
echo("-------------------------------------------------------------------------------------<br>");

// 2) Crie um algoritmo que solicite a entrada de um número,
//  e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
function tabuada($numtabuada){
    $numtabuada = $_GET["tabuada"];

     for($i=0; $i <= 10; $i++){
            $total = $i*$numtabuada;
            echo " $numtabuada x $i = $total <br>";
     }
}

echo "Variavel no browser: http://localhost/php1/exercios.php?tabuada=X<br>";
@tabuada($numtabuada);
echo("-------------------------------------------------------------------------------------<br>");