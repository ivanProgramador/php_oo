<?php

   /*
     O encapsulamento de tributos tem como obejtivo proteger as classes e a consistencia do codigo
     evitando que a base da classe de um obejto seja alterada diretamente podendo gerar um erro ou 
     a quebra da aplicação.

     um atrbuto que tem a configuraçao de acesso como private ou protected nao pode ser ecssado de fora da classe
     diretamente ao inves disso dentro da propria classe e criado um metoso com acesso publico que pode acessar 
     esse atributo internamente e ai sim fazer as alteraçoes necessarias.

     eses metodo sao os metodos __get() e __set() no caso do metodo get  precisa somente de um parametro para funcionar
     corretamente coloca uma varivel como parametro e ele retona o valor do atributo desejado. 

     porem o metodo set precisa que no primeiro parametro você informe que atributo você quer configurar e no segundo qual valor
     você precisa atribuir ao atributo em questão.

     os metodos possuem a mesma analogia quando privados ou pro tegidos so são acessiveis sem erro de dentro da proria classe 
     entao cria-se um metodo publico que chamamos de interface que vai ser acessivel de fora da classe para que este possa acionar os metodos internos como no exemplo abaixo.     

   */

  //atributos


  class Pai{

  private $nome = 'jorge';
  protected $sobrenome = 'silva';
  public $humor = 'Feliz';

  //metodos

  public function __get($atributo){

  	return $this->$atributo;

  }

  public function __set($atributo,$valor){

  	$this->$atributo=$valor;
  	
  }

  private function executarMania(){

  	echo "<br>Assobiar";

  }
  protected function responder(){

  	echo"<br>oi";

  }


  public function executarAcao(){
    
    // esses metodos sao protegidos/privados mas eles podem ser acionados do lado de fora da classe 
    // se houver um metodo publico que sirva de interface interface 

  	$this-> executarMania();
  	$this-> responder();


  }

}

// editando atributo privado nome

$y = new Pai();

$y-> __set('nome','jose');  // neste caso chamei o metodo publico set pra manipular o atributo privado nome

echo "Nome alterado: ".$y->__get('nome');

// usando metodo publico pra chamar um metodo privado

$y->executarAcao();


?>