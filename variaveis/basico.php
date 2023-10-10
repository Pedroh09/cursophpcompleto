<div class="titulo">Variáveis</div>

<?php
    $numero = 12 ;
    $nome = "aluno";
    $sobrenome = "Jorge";

    //msotrar vareavel

    echo $numero, "<br>";
    echo $nome,"<br>";
    echo $sobrenome,"<br>";

    //mostrar vareavel 2 tipo
     // var_dump mostra o tipo da vareavel

    var_dump($numero);
    var_dump($nome);
    var_dump($sobrenome);

        // <br> foi usado para pular linha
    echo "<br>";

    $a = 2;
    $b = 10;
    $somaDeTodosNumeros = $a + $b;
    echo $somaDeTodosNumeros , "  --- isso foi a soma dos dois numeros";
    echo "<br>";

    // verificar se a vareavel existe, se retornar 1 (ela existe) se não nao existe
     echo isset($somaDeTodosNumeros) . "  isset vareavel" . "<br>";

     unset($somaDeTodosNumeros);

     echo "vareavel não existe agora" . '<br>';
    
     if (isset($somaDeTodosNumeros)) {
        echo "vareavel existe";
     }else {
        echo "vareavel não existe";

     }




   
    
?>