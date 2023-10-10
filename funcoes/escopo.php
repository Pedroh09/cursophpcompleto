<div class="titulo">Função & Escopo</div>

<?php 
        //criamos uma função para criar e depois usa.
    function imprimirMensagem() {
        
        echo "ola ";
        echo "Estou dentro da função !!!!!!! <br>";

    }
    //usamos a função
    imprimirMensagem();
    imprimirMensagem();
    imprimirMensagem();

    $vareavel = 1;

    function trocarValor () {
    
        $vareavel = 2;
        echo "durante a função: $vareavel <br>";
    }
    echo "antes da função : $vareavel<br>";
  
    trocarValorVerdade();

    echo "depois da função : $vareavel <br>";


    function trocarValorVerdade()  {

        global $vareavel;

        $vareavel = 55;

        echo "durante a função: $vareavel <br>";
        
    }

    ?>