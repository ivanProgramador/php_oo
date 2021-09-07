<?php
  /* Namespa e um recuros do php qua divide o codigo em areas permitindo o agrupamento de 
     classes com o mesmo nome no mesmo arquivo isso é utl quando se utiliza uma biblioteca 
     que por acaso tem o mesmo nome de uma classe ou de uma função ue e necessaria a o código abaixo pra exemplificar existem 2 classes com a mesma assinatura(nome) chamdas Cliente caso o recurso de namespace não seja alicado nestre codigo o php retornaráum erro indicando que a classe está sendo declarada 2 vezes.

     No caso abaxo o script foi dividido em 2 então nao dá erro porque uma classe esta no namespace A e a outra no B.

     Elas podem interagir so não vão dar erro.Quando se cria uma instacia de uma dessas classes e aciona-se algum retorno ele vem junto com o namespace correspondente.


      */

     namespace A;

     class Cliente{

     	public $nome = 'jamilton';

     	public function __get($attr){

     		$this->$attr = $attr;

     	}
     }
      $c = new Cliente();

     echo print_r($c);
     echo "<br>";




     namespace B;


      class Cliente{

     	public $nome = 'jorge';

     	public function __get($attr){

     		$this->$attr = $attr;

     	}
     }


     $c = new Cliente();

     echo print_r($c);
  


?>