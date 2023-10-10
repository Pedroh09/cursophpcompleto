<div class="titulo">TRY/CATCH</div>

<?php 

// echo 7 / 0;
// echo intdiv(10,2);

try {
    echo intdiv(7,0);

} catch (\Error $e) {
    echo "Teve um erro no cogigo............ !!!!! <br>"; // capitura a exceção do erro;
}

try{

    throw new Exception( " <br> um erro muito estranho <br>  "); //lança uma exceção com uma mensagem 

        echo intdiv(7,0);

    } catch(DivisionByZeroError $e) {

        echo "Division by zero"; //capitura a exceção especifica  de divição por zero (que não ocorreu aqui );

    }catch (Throwable $e ) {

        echo "Erro encontrado:  " . $e -> getMessage() . "<br>"; //capitura as exceções

    }
    finally{

        echo "Sempre executado ! <br>"; //o codigo dentro do bloco 'fanally' sempre sera excutado independente das exceções;


    }

?>