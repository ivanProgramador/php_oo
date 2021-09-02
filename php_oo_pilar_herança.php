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


  class Veiculo {

      public $placa = null;
      public $cor   = null;

      function acelerar(){
        
        echo "acelerar";

     }


  }




 class Moto extends Veiculo{

 	
  	public $contra_peso_guidao = true;

  	//usando o metodo construtor para definir os  valores dos atributos herdados 

  	function __construct($cor,$placa){

  		$this -> cor = $cor;
  		$this -> placa =$placa;
  	}

  
  	function empinar(){

  		echo "Empinando moto";
  	}


 }






  class Carro extends Veiculo{

  
  	public $teto_solar = true;

  	function __construct($cor,$placa){

  		$this -> cor = $cor;
  		$this -> placa =$placa;
  	}

  	

  	function abrirTetoSolar(){

  		echo "Abrindo";
  	}

  	function mudarPosicaoVolante(){

  		echo "Mudando posição";
  	}


  }


  $y = new Moto('AZUL','ABC2233');
  $x = new Carro('VERMELHO','ABC2233');
  $z = new Veiculo();


   echo"Objeto da classe veiculo mostrando as caracteristicas que a classe contem";
    echo"<hr>";


  echo "<pre>";

    print_r($z);

  echo "<pre><br>";

  echo"Objeto da classe moto herdando as caracteristicas cor e placa da classe Veiculo";
    echo"<hr>";


  echo "<pre>";

    print_r($y);

  echo "<pre><br>";

   echo"Objeto da classe Carro herdando as caracteristicas cor e placa da classe Veiculo";
    echo"<hr>";

 echo "<pre>";

    print_r($x);

  echo "<pre><br>";

  echo"chamando metodos herdados<br><hr>";
  echo "Moto<br>";
  echo $y->acelerar().'<br>';

  echo "Carro<br>";
  echo $x->acelerar();




?>