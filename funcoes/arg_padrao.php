<div class="tutulo">Argumento Padrão</div>

<?php

    function saudacao($nome = "  Senhor(A)" , $sobrenome = "  Cliente") {

        return "Bem Vindo, $nome $sobrenome ! <br>";

    }
        echo "</hr>";
   echo saudacao();
   echo saudacao(null);
   echo saudacao(null,null);
   echo saudacao('Joao', "carreira");
   echo "</hr>";

   

   function pizza ($cliente = "Senhor(A)", $bebida = "Temos Agua e outros...") {

    return "Bem Vindo, $cliente $bebida , algo a mais ? <br>";

   }
   echo "</hr>";
  
   echo pizza (null, null);
   echo pizza ("Jorge", null);
   echo pizza ("Jorge01", "COCA");
   echo "</hr>";





?>