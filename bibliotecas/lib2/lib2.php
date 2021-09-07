<?php

 namespace B;

     interface cadastroInterface {

     	public function remover();
     }


      class Cliente implements cadastroInterface{

     	public $nome = 'jorge';

     	public function remover(){

     		echo "removendo";
     	}


     	public function __get($attr){

     		$this->$attr = $attr;

     	}
     }






?>