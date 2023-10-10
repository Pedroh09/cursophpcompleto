<div class="titulo">Sessao</div>    

<?php 

  session_start();
  
  print_r($_SESSION);


  if (! $_SESSION['nome']){
    $_SESSION['nome'] = "RODINEE";
    
  }

  if (! $_SESSION['email']){
    $_SESSION['email'] = "RODINEE@gmail.com";
    
  }

?>

<p >
    <a href="/sessao/basico_sessao_alterar.php"> Alterar Sessao</a>  

</p>