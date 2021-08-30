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
    public $cargo = null;
    public $salario = null;



    /* overloading(sobrecarga de metodos) funciona como uma especia de metodo coringa
       que so sebemos que e um metodo do tipo get /set porem os aparametos podem variar
       de acordo com a necessidade no codigo abaixo mostra que ele recebe atributo e valor
       ou seja o atributo retornado ou alterado pode ser qualquer um dos atributos presentes no objeto em questão isso evita a aesrita de uma quantiodade grnade de linhas 
       se cada atributo tivesse seu proprio get e set o codigo seria bem mais verboso
      */

    function __set($atributo,$valor){

      $this->$atributo = $valor;

    }

    function __get($atributo){

     return $this->$atributo;


    }



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


  /*    function setNome($nome){

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
      }*/

         
   


    function resumirCadFunc(){

    	echo "$this->nome possui $this->numFilhos filhos";
     }

     function modificarNumFilhos($numFilhos){

     	$this->numFilhos = $numFilhos;
     	
     }


   }
   

   $y = new Funcionario();

   //editando dados

   $y->__set('nome','José');
   $y->__set('numFilhos',2);
   $y->__set('cargo','Operador');
   $y->__set('salario',1200);

  // mostrando dados

   echo "Dados do funcionario: 1<br> ";

   echo 'Nome:'.$y->__get('nome').'<br>numero de filhos'.$y->__get('numFilhos').' <br>cargo'.
   $y->__get('cargo').'<br>Salario:'.$y->__get('salario').'<br><br>';

  //criando um segundo objeto com base na mesma classe




   $x = new Funcionario();
   
   //editando dados 

   $x->__set('nome','Maria');
   $x->__set('numFilhos',3);
   $x->__set('cargo','supervisora');
   $x->__set('salario',1300);

   //mostrando dados

   echo "Dados do funcionario: 2 <br> ";

   echo 'Nome:'.$x->__get('nome').'<br>numero de filhos'.$x->__get('numFilhos').' <br>cargo'.
   $x->__get('cargo').'<br>Salario:'.$x->__get('salario');


?>