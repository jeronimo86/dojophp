<?php

use PHPUnit\Framework\TestCase as PHPUnit;
use DojoPHP\Desafios\Calculadora;

class CalculadoraTest extends PHPUnit {

	public function testSetup() {
	
		$texto = "Setup da classe de teste!";

		return $this->assertEquals("Setup da classe de teste!", $texto);
	}

	// Testar calculo da idade.
	
	 public function calcularIdade() {
      
    floor ((((($hoje - $nascimento) /60) / 60) / 24) / 365);
	  
	return calcularIdade();
	 
	 }	
	 
	 echo calcularIdade();
	 
}
