<?php
   
   /* Esta classe ea abstração de um funcionario no contesto do sistema de rh de uma empresa
    * 
    */

   //modelo


   class Funcionario{

     //atributos
     
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;


    // metodos(açoes de um objeto)

    /*metodos geters e seters são metodos de segurança 
      que protegem a integridade da classe por um questão de segurança
      não sepode permitir uma interação direta com os atributos da classe principal que serve de molde para um objeto porque se isso acontece 
      todos os outros objetos que venham a surgir usando essa classe de base 
      vai assumir os valores que estão lá comprometendo o sistema todo.

      os metodos get(pegar) set(alterar/definir) são metodos usados pera meanipular esses valores co bbase no contexto do objeto atual que esta sendo usado no caso aqui essa classe molda um funcionario.

      se essa empresa possui varios funcionarios esses tem nomes ,telefones e quantidade de filhos diferentes e quando se usa get e set pra alterar cada
      funcionario vai ter os seus dados párticulares, pois os metodos get e set trabalham dentro do contexto do objeto em questão sem padronizar. 
    */


      function setNome($nome){

      	$this->nome = $nome;

      }

      function getNome(){

      	return $this->nome;
      }

       function setNumFilhos($numFilhos){

        $this->numFilhos = $numFilhos;

      }

      function getNumFilhos(){

        return $this->numFilhos;
      }

         
   


    function resumirCadFunc(){

    	echo "$this->nome possui $this->numFilhos filhos";
     }

     function modificarNumFilhos($numFilhos){

     	$this->numFilhos = $numFilhos;
     	
     }


   }

   $y = new Funcionario();

   //editando dados

   $y->setNome('José');
   $y->setNumFilhos(3);

  // mostrando dados

   echo "funcionario 1<br>";

   echo $y->getNome().'  possui  '.$y->getNumFilhos().' filhos<br>';

  //criando um segundo objeto com base na mesma classe

   echo "funcionario 2<br>";

   $x = new Funcionario();
   
   //editando dados 

   $x->setNome('Maria');
   $x->setNumFilhos(2);

   //mostrando dados

   echo $x->getNome().'  possui  '.$x->getNumFilhos().' filhos<br>';





  

  








   





   
   

?>