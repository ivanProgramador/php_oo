<?php
  /* Namespa e um recuros do php qua divide o codigo em areas permitindo o agrupamento de 
     classes com o mesmo nome no mesmo arquivo isso é utl quando se utiliza uma biblioteca 
     que por acaso tem o mesmo nome de uma classe ou de uma função ue e necessaria a o código abaixo pra exemplificar existem 2 classes com a mesma assinatura(nome) chamdas Cliente caso o recurso de namespace não seja alicado nestre codigo o php retornaráum erro indicando que a classe está sendo declarada 2 vezes.

     No caso abaxo o script foi dividido em 2 então nao dá erro porque uma classe esta no namespace A e a outra no B.

     Elas podem interagir so não vão dar erro.Quando se cria uma instacia de uma dessas classes e aciona-se algum retorno ele vem junto com o namespace correspondente.


      */

     namespace A;


     interface cadastroInterface {

     	public function salvar();
     }

     

     /*O codigo abaixo implementa a interface que esta no namespace b isso é possivel graças ao recurso de refrencia entre namespaces \B\ a pirmeira que nao tem pertence 
     ao namespace A (nativo) e a segunda que tem a referencia \B\ poque nao pertence a namespace B */

     class Cliente implements cadastroInterface,\B\cadastroInterface{

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
     
     // \A\ antes da classe serve pra definir a que classe dos namespaces e estou me 
     //  refererindo visto que as duas classes tem nomes iguais a unica coisa que //diferencia as mesmas sao o namespace a qual estão contidas.

     $c = new \A\Cliente();

     echo print_r($c);
  


?>