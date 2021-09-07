<?php

  namespace A;


     interface cadastroInterface {

          public function salvar();
     }

     

     /*O codigo abaixo implementa a interface que esta no namespace b isso é possivel graças ao recurso de refrencia entre namespaces \B\ a pirmeira que nao tem pertence 
     ao namespace A (nativo) e a segunda que tem a referencia \B\ poque nao pertence a namespace B */

     class Cliente implements cadastroInterface{

          public $nome = 'jamilton';

          public function __construct(){

            echo "<pre>";
               print_r(get_class_methods($this)); // mostando os metodos da classe
               echo "<pre>";
          }

          public function salvar(){

               echo "Salvando..";
          }

          public function remover(){

               echo "removendo";
          }


          public function __get($attr){

               $this->$attr = $attr;

          }
     }


  ?>