<?php

 // @author: Jeronimo, A

$dia_nascimento = 29;
$mes_nascimento = "Setembro";
$ano_nascimento = 1980;
$ano_actual = 2017;

// Funcao para calcular idade
function idade_usuario() {
    global $ano_actual;
    global $ano_nascimento;
    
    echo $ano_actual - $ano_nascimento;
}

idade_usuario();

/**
 
 @author: Jeronimo, A
 Uma classe para calcular a idade
 
 */

namespace DojoPHP\desafios;

class calculadora_de_idade




?>