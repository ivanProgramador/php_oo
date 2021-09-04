<?php
      /* No contexto de encapsulamento atributos privados não são herdados, a exemplo da classe 
        filho que no codigo abaixo extende a classe pai ele mantem o nome como atributo exclusivo da classe 
        pai.

        no teste abaixo usando o metodo getAtributo ele consegue refrenciar as variaveis humor sobrenome,
        mas o atributo nome que esta com o acesso private ele dá erro.pois embora o valor possa ser exibido
        ou referenciado ele nao pertence a classe filho.

        basicamente pra resolver isso crie um metodo publico que vai acessar o atributo nome de dento da 
        classe filho e ddepois pra star chame o metodo publico do objeto.



      */





  class Pai{

  private $nome = 'jorge';
  protected $sobrenome = 'silva';
  public $humor = 'Feliz';

 

  

  private function executarMania(){

  	echo "<br>Assobiar";

  }
  protected function responder(){

  	echo"<br>oi";

  }


  public function executarAcao(){
    
    
  	$this-> executarMania();
  	$this-> responder();


  }

}




class Filho extends Pai {

	public function getAtributo($attr){

		return $this->$attr;

	}
	
  public function setAtributo($attr,$valor){

    $this -> $attr = $valor;

  }
  



}

$filho  = new Filho();

print_r($filho);

echo "<br>";
$filho -> setAtributo('nome','jose');
echo "<pre>";
echo $filho -> getAtributo('nome');
echo "<pre>";



?>






 