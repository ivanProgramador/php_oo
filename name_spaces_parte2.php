<?php

  /*Importando as bibliotecas paera usa-las neste aquivos lemebndo sempre que a importação só funciona para classes e interfaces não se palica para funções nem constantes que ja estao dentyro do modelo de dados por isso não e necessario uma importação*/

  require './bibliotecas/lib1/lib1.php';
  require './bibliotecas/lib2/lib2.php';

  /*temos a referencia parra duas bibliotecas e cada uma tem a seua versão da classe cliente para que o php possa saber que classe eu quero importar ao criar um objeto 
  eu tenho que dizer a que classe eu to me refrindo
   */

  /*Abaixo estou diznedo que quero usar duas classes tanto do namespace A quanto do names pace B  mas declarando assim eu causo um erro porque as duas classes tem a amesma assinatura e nao existem namespaces separando elas para resolver isso e necessario 
  dar um apelido a uma das duas um ALIAS.
   */

  use A\Cliente as C1; /* Agora para o interpretador a classe cliente do namespace A sechama c1 diferenta da classe cliente do namespace B resolvendo o conflito entre as duas */  

  use B\Cliente;

  $c = new C1();  // para usa-la eu tenho que chama-la pelo apelido agora

  echo "Detalhes do objeto<br>";
  print_r($c);
  echo "<br>atributo nome do objeto<br>";
  echo $c->__get('nome');



?>