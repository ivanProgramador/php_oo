<?php
     /*  A interface e como se fosse um contrato onde todos os objetos que implementam
         ela tem que ter os seu metodos e implementa-los ou seja e como se ela fosse
         uma padrão de classes nesse caso a interface abaixo contem os metodos ligar e desligar
         todas as classes que quiserem usar esta interface precisam ter esses metodos e implemnta-los de alguma forma.

         seja o aparelho que ligue por interruptor/touch/voz/controle/ remoto ... e etc
         se ele liga ou desliga e quiser implmenta-la tem que ter esses metodos caso ele nao tenha 
         um erro sera apresentado. se implemetar só um da erro tem que ser todos os metodos contidos na interface.

         as vanatgens disso e que se voce estiver trabalhando com um time todos eles precisam implementar os mesmos metodos a interface danddo assim um maior controle doque esta
         sendo feito no projeto. 



     */



     interface EquipamentosEletronicosInterface{

     	public function ligar();
     	public function desligar();


     }

  //---------------------------------------------


     class Geladeira implements EquipamentosEletronicosInterface{
        
        function ligar(){
        	echo "Ligado";
        }

        function desligar(){
        	echo "desligado";
        }


     	function abrirPorta(){

     		echo "Aberta";
     	}
     }


     class Tv implements EquipamentosEletronicosInterface{
        
        function ligar(){
        	echo "Ligado";
        }

        function desligar(){
        	echo "desligado";
        }


     	function trocarCanal(){

     		echo "Trocando  canal";
     	}
     }
      // implementando 2 interfaces ao mesmo tempo
     //------------------------------------------------


     interface MamiferoInterface{


     	public function respirar();
     	
     }


     interface TerrestreInterface{

     	public function andar();
     	
     }

     interface AquaticoInterface{

     	public function nadar();

     }


     //------------------------------------------------
     //implementando mais de uma interface


     class Humano implements MamiferoInterface,TerrestreInterface{

     	public function andar(){
     		echo"Andando";
     	}

     	public function respirar(){

     		echo "Respirando";
     	}

     }
     
     class Baleia implements MamiferoInterface,AquaticoInterface{

     	public function nadar(){

     	     echo"Nadando";
     	}

     	public function respirar(){

     		echo "Respirando";
     	}



     }




     //---------------------------------------
     //herança de metodos entre interfaces para fazer a herança entre interface use o extends

     interface AnimalInterface{

     	public function comer();
     }

     interface AveInterface extends AnimalInterface{

     	public function voar();
     }



     class Papagaio implements AnimalInterface,AveInterface{


     	public function comer(){

     		echo"Comendo";
     	}

     	public function voar(){

     		echo"Voando";
     	}






     }

















  ?>