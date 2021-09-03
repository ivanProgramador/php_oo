<?php
      /* No contexto de encapsulamento atributos privados não são herdados, a exemplo da classe 
        filho que no codigo abaixo extende a classe pai ele mantem o nome como atributo exclusivo da classe 
        pai.

        no teste abaixo usando o metodo getAtributo ele consegue refrenciar as variaveis humor sobrenome,
        mas o atributo nome que esta com o acesso private ele dá erro. 





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
	



}

$filho  = new Filho();

print_r($filho);

echo "<br>";
echo $filho -> getAtributo('sobrenome');



?>






 