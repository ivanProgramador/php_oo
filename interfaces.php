<?php
     /*  A interface e como se fosse um contrato onde todos os objetos que implementam
         ela tem que ter os seu metodos e implementa-los ou seja e como se ela fosse
         uma padrão de classes nesse caso a interface abaixo contem os metodos ligar e desligar
         todas as classes que quiserem usar esta interface precisam ter esses metodos e implemnta-los de alguma forma.

         seja o aparelho que ligue por interruptor/touch/voz/controle/ remoto ... e etc
         se ele liga ou desliga e quiser implmenta-la tem que ter esses metodos caso ele nao tenha 
         um erro sera apresentado. se ilemetar so um da erro tem ue ser todos os metodos contidos na interface



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



  ?>