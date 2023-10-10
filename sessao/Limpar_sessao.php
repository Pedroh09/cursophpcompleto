<?php 
    session_start();
    session_destroy();
    header('location: basico_sessao.php ');               //acessar pagina  basico_sessao.php 

?>