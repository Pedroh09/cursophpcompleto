<?php 

session_start();
print_r($_SESSION);

?>

<p> 

<b> Nome:  </b> <?= $_SESSION['nome']  ?> <br>
<b> Email:  </b> <?= $_SESSION['email']  ?> <br>

</p>

<?php 

    $_SESSION['email'] = "RODINEE000001@gmail.com";

?>

<p >
    <a href="/sessao/basico_sessao.php"> Voltar Sessao</a>  

</p>



<p >
    <a href="Limpar_sessao.php"> Limpar Sessao</a>  

</p>