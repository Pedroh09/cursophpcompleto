<div class="titulo">Erros NAO PERSONALIZADOS</div>

<?php

    class FaixaEtariaExcepition extends Exception{

        public function __construct( $mensagem, $code = 0 , $previous = null){
            echo "ERRo personalizado:   $mensagem <br>";
            parent::__construct($mensagem, $code, $previous);
        }
    }

function CalcularTempoAposentadoria($idade)  {
    if ($idade < 18){

        throw new FaixaEtariaExcepition("Ainda esta muito longe para se aposentar <br>");

    }
    if ($idade > 70 ) {

        throw new FaixaEtariaExcepition ("Ja deveria estar aposentado");

    }
    return 70 - $idade;
}    



$idadesAvaliadas = [15,30,60,80];

foreach ($idadesAvaliadas as $idade){

    try {
        $tempoRestante =  CalcularTempoAposentadoria($idade);
        echo "Idade:   $idade, $tempoRestante anos restantes. <br>";

    }
    catch(FaixaEtariaExcepition $e){

        echo "Não foi Possivel calcular para $idade anos. <br>";
        echo "Motivo: {$e -> getMessage()} <br>";


    }

}
?>