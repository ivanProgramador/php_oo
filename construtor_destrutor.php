<?php
   

   /*Metodos construtores servem apara iniciar o objeto assim que ele é instanciado sem que seja necessarios
     chama-lo por referencia basicamente o metodo construtor recebe qualquer coisa que vier como instancia 
     para depois encaixar dentro dos atributos chamados dentro dele.ele pode receber varios parametros ao mesmo tempo 
     e se ativa assim que qualquer instancia e chamada
    */

     /*Metodo destrutor serve para desalocar o objeto da memoria após a finalização do script(de forma automatica) ou
       de de forma proposital usando a função unset($pessoa); 

       os metodos destrutores/ construtores servem para se ter um controle do ciclo de vida do objeto durante aexecução do script
       e possivel criar um objeto para que ele cumpra um função e depois apaga-lo da memoria quando não for mais necessario usando
       esses tipos de metodos


     */


   class Pessoa{
       
        public $nome = null;

        // construindo o objeto

         function __construct($nome){

         	echo "Objeto iniciado ";

         	$this->nome = $nome;

         }
         
         // apagando ele após a instancia e construção de forma automática

         function __destruct(){

         	echo "Objeto removido";
         }


         function __get($atributo){

         	return $this->$atributo;
         }

         function correr(){

         	return $this -> __get('nome').'  está correndo';
         }



      }


      $pessoa =  new Pessoa('jorge');

      echo "<br>Nome: ".$pessoa ->__get('nome');

      echo '<br>'.$pessoa-> correr();

      unset($pessoa); // apagando o objeto de forma proposital



?>