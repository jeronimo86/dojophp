<?php

namespace DojoPHP\Desafios;

class Calculadora {

   /* VAriavel base*/
   
      $data = '08/09/1980';
    
    /* Lista das Variaveis*/
   
       list( $dia, $mes, $ano) = explode('/', $data);
    
    /* Descricao do  */
   
       $data_actual = mktime(0, 0, 0, date('d'), date('m'), date('Y'));
    
       $nascimento = mktime(0, 0, 0, $dia, $mes, $ano);
    
    //Funcao para calcular a Idade

    public function calcularIdade() {
    
    $data_actual = mktime(0, 0, 0, date('d'), date('m'), date('Y'));
    
    $nascimento = mktime(0, 0, 0, $dia, $mes, $ano);
      
      
    floor ((((($hoje - $nascimento) 60) / 60) / 24) / 365);
	  
	
	 
	}	
	
	return calcularIdade();
	
}

