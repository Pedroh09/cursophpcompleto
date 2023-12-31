<?php

    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($_POST ['email']){

        $usuarios = [
            [
                "nome" => "Jorge",
                "email" => "al@gmail.com",
                "senha" => "123",
            ],
            [
                    "nome" => "Silvio",
                    "email" => "si@gmail.com",
                    "senha" => "123",
            ]
 ];
            
            foreach($usuarios as $usuario){
                $emailValido = $email === $usuario['email'];
                $senhaValido = $senha === $usuario['senha'];
                if($senhaValido && $emailValido){

                    $_SESSION['erros'] = null;
                    $_SESSION['usuario'] = $usuario ['nome'] ;
                    $exp = time() + 60 * 60 * 24 * 30;
                    setcookie('usuario',$ususario['nome'],$exp);
                    header("Location: index.php");

                }
            }

            if (!$_SESSION['usuario']){
                $_SESSION['erros'] = ['Usuario/Senha Invalido !!'];
            }



    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>CURSO PHP</title>
</head>
<body class='login'>
    <header class="cabecalho">
        <h1>CURSO PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>

     <main class="principal">
        <div class="conteudo">
           <h3>Identifique-se</h3>
           <?php if ($_SESSION['erros']): ?>
        <div class="erros" >
            <?php  foreach($_SESSION['erros'] as $erro):  ?>
                <p><?= $erro?></p>
                <?php  endforeach  ?>
            </div>    
            <?php  endif  ?>

            <form action="#" method="post">

                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>

            </form>
    
    </div>
    </main>
    <footer class="rodape">
        3B1 Novotec <?= date('Y') ?>
    </footer>
  
</body>
</html>