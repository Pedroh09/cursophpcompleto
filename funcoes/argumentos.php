<div class="titulo">Argumentos e Retorno</div>

<?php

    function obterMensagem() {

        return "seja bem vindo(A)!";

    }
        $mensagem = obterMensagem();

        echo $mensagem;

        //função com parametro

        function obterMensagemComNome($nome) {

        return "seja bem vindo, {$nome}";

        }

        echo '<br>'. obterMensagemComNome ("joão");
        echo '<br>'. obterMensagemComNome ("marcos");


        function soma (){
            return 5 + 20;


        }
        
        function somaParametro($x,$y) {

            return  $x + $y;

        }

         echo "<br>" . "A soma:  " . soma();
         echo "<br>" . "A soma com argumentos:   " . somaParametro(100,25);


?>