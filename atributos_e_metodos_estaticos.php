<?php

   /* Metodos e atributos estáticos não precisam de um objeto para serem acionados
      são metodos pre-ddefinidos que não estão esperando nenhum tipo de alteração
      por isso qualquer tentativa de refrencia a eles seja por metodos get , -> ou 
      instancia de objetos com base na classe resultara em erro.
       */

    class Exemplo{

    	public static $frase = 'Eu sou um atributo estático';

    	public static function  metodo()
    	{
    		echo "Eu sou um metodo estático";
    	}


    }


    echo Exemplo::$frase;
    echo "<br>";
    echo Exemplo:: metodo();



?>