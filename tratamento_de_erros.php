<?php
  /*
   O tratamento de erros deve ocorrer com intuito de evitar erros fatais na aplicação 
   erro fatais são erros que paralizam o script e travam a logica de execução, para evitar que isso aconteça eo cause um incomodo ao cliente ou até prejuizo exite a estrategia try catch - 

   no primeiro bloco try faz uma tentativa de executar o codigo que pode dar erro caso ele realmente de erro o cactch captura o erro salva em uma variavel e continua o resto da logica do sistema em questão


  */

  try{
    echo "*** try **<br>";
   // $sql = "select * from clientes";
   // mysql_query($sql);

    /*Tambem exite a possibilidade de lançar erros de proposito para a aplicão
      de forma controlada

      o codigo abaixo usa uma funçao para testar se um arquivo existe essa função só retorna true ou false então o como ela vai retonar false porque o arquivo nao existe
      coloquei uma negação pra o falso virar verdadeiro e ela excutar o codigo que solta 
      a excessao.

    */

     if (!file_exists('arquivo_azul.php')) {

     	throw new Exception('O arquivo deveria estar disponivel as '.date('h:i:s').'porem não estava<br> ');
     	
     }


  }catch(Error $e){

  	 echo "*** catch Erro **<br>";
  	 echo "erro".$e;
  	 echo "*** o catch pegou esse erro e colocou em uma variavel **<br><br>";



  }catch(Exception $e){

  	 echo "*** catch Excesão **<br>";
  	 echo "erro".$e;
  	 echo "*** o catch pegou esse erro e colocou em uma variavel **<br><br>";



  }finally{

  	echo "** finally **";

  }



?>