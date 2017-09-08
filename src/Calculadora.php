<?php

namespace DojoPHP\Desafios;

class Calculadora {

   /* Declarando as info do usuario*/
   
      $data = '08/09/2017';
    
    /* Lista das Variaveis*/
   
       list( $dia, $mes, $ano) = explode('/', $data);
    
    /* Descrever */
   
       $hoje = mktime(0, 0, 0, date('d'), date('m'), date('Y'));
    
       $nascimento = mktime(0, 0, 0, $dia, $mes, $ano);
    
    //Funcao para calcular a Idade

    public function calcularIdade() {
      
    floor ((((($hoje - $nascimento) /60) / 60) / 24) / 365);
	  
	return calcularIdade();
	 
	 }	
	
}

