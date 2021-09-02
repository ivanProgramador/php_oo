<?php

  /*Uma das vantagens da herança é evitar a redunancia de codigo  
    nos casos das classes abaixo trata-se da abstração dde um carro e uma moto
    ambos teem metodos e atributos incomum por exemplo moto e carro são veiculos
    diferentes porem ambos precisam acelerar para sair ddo lugar ambos tem cor
    e placa tambem.

    Não é uma boa prática então neste caso e necessario refatorar o codigo crianddo uma classe
    que vai conter os atributos e metodos redundantes e para que a classe moto e carro 
    tenham acesso a estes atributos/metodos o principio de herrança sera acionado pela diretiva
    extends que inidica que carro e moto são uma extenção a classe veiculo que será responsavel por conter os metodos redundantes. 

    de ambas as classes.

  */


 class Moto{

 	public $placa      = 'ABC2233';
  	public $cor        = 'branco';
  	public $contra_peso_guidao = true;

  	function acelerar(){

  		echo "Acelerando moto";
  	}

  	function empinar(){

  		echo "Empinando moto";
  	}


 }






  class Carro {

  	public $placa      = 'ABC1234';
  	public $cor        = 'branco';
  	public $teto_solar = true;

  	function acelerar(){

  		echo "Acelerando";
  	}

  	function abrirTetoSolar(){

  		echo "Abrindo";
  	}

  	function mudarPosicaoVolante(){

  		echo "Mudando posição";
  	}


  }


?>