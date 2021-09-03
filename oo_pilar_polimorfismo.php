<?php

    /*POLIMORFISMO
        A tecnica de polimorfismo utiza a reescrita de metodo para evitar redundancia de codigos
        no exemplo deste codigo temos uma superclasse Veiculo e duas classes filhas moto,carro 
        que herdam os metodos que teem incomum da superclasse porem a moto e o carro embora tenham
        suas semelhanças existe um comportamento nesses objeto que chama troca de marcha que existe
        para os dois porem essa ação e feita de modo diferente.

        em um carro usamos o pe pra desengatar a embreagem e a mão para engatrar a marcha

        em uma moto usamos a mão para desengatar a embreagem eo pé para engatar a marcha

        mas so pode existir um metodo trocar marcha dentro da superlasse, entao para resolver isso
        ou na classe moto ou na classe carro esse metodo deve ser reescrito com a mesma assinatura(nome)
        porem com o código interno diferente, fazendio assim a diferença acontecer entre as classes sem que seja 
        preciso implementar um metodo para cada classe filha dentro da superclasse. 

        a superclasse veiculo tem o metodo trocarMarcha() porem cada veiculo term o mesmo metodo reescrito conforme suas necessidades
        especificas



    */


    class Veiculo {

      public $placa = null;
      public $cor   = null;

      function acelerar(){
        
        echo "acelerar";

     }

     function trocarMarcha(){

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

  	 function trocarMarcha(){

  	 	echo "usando a mão para desengatar a embreagem eo pé para engatar a marcha";

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

  	 function trocarMarcha(){

  	 	echo "usando o pé para desengatar a embreagem e a mão para engatrar a marcha";

     }


  }


  $x = new Moto('Azul','ABC2233');
  $y = new Carro('Azul','ABC2233');

  echo "Trocando marcha da moto<br>";
  echo $x->trocarMarcha();
  echo "<br>";
   echo "Trocando marcha do carro<br>";
  echo $y->trocarMarcha();



?>