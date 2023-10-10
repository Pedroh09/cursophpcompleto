<?php 
session_start();
if(!$_SESSION['usuario']){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estilo.css">
    <title>CURSO PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>CURSO PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Modulo 01</h3>
                    <ul>
                    <li><a href="exercicio.php?dir=basico&file=ola">Ola php</a></li>
                    <li><a href="exercicio.php?dir=basico&file=html">Integracao HTML</a></li>
                    <li><a href="exercicio.php?dir=basico&file=css">Integracao CSS</a></li>
                    <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios PHP</a></li>
                    
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Modulo 02</h3>
                    <ul>
                    <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
                    <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuicoes</a></li>                   
                    </ul>
                </div>

                <div class="modulo azul">
                    <h3>Modulo 03</h3>
                    <ul>
                    <li><a href="exercicio.php?dir=funcoes&file=escopo">Funções & Escopo</a></li> 
                    <li><a href="exercicio.php?dir=funcoes&file=argumento_retorno">Argumentos & Retorno</a></li>            
                    <li><a href="exercicio.php?dir=funcoes&file=argumento_variavel">Argumentos & Variaveis</a></li>
                    <li><a href="exercicio.php?dir=funcoes&file=arg_padrao">Argumentos Padrões</a></li>
                    <li><a href="exercicio.php?dir=funcoes&file=anonima">Funções Anônimas</a></li>
                    <li><a href="exercicio.php?dir=funcoes&file=closureECallable">Closure & Callable</a></li>
                    <li><a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retorna Função</a></li>
                    <li><a href="exercicio.php?dir=funcoes&file=map_filter">Map & Filter</a></li>
                    </ul>
                </div>

                <div class="modulo marrom">
                    <h3>Modulo 04</h3>
                    <ul>
                    <li><a href="exercicio.php?dir=classes_objeto&file=classe">Primeira Classe</a></li> 
                    <li><a href="exercicio.php?dir=classes_objeto&file=construtor_destrutor">Construtor & Destrutor</a></li>
                    <li><a href="exercicio.php?dir=classes_objeto&file=heranca">Herança</a></li>  
                    <li><a href="exercicio.php?dir=classes_objeto&file=visibilidade">Visibilidade</a></li>
                    <li><a href="exercicio.php?dir=classes_objeto&file=static">Membros Estáticos</a></li>  
                    <li><a href="exercicio.php?dir=classes_objeto&file=interface">Interface</a></li> 
                    <li><a href="exercicio.php?dir=classes_objeto&file=abstract">Abstrato</a></li>
                    <li><a href="exercicio.php?dir=classes_objeto&file=final">Modificador Final</a></li> 
                    <li><a href="exercicio.php?dir=classes_objeto&file=trait_01">Traits #01</a></li> 
                    <li><a href="exercicio.php?dir=classes_objeto&file=trait_02">Traits #02</a></li> 
                    <li><a href="exercicio.php?dir=classes_objeto&file=magic_methods">Métodos Mágicos</a></li> 
                    <li><a href="exercicio.php?dir=classes_objeto&file=polimorfismo">Polimorfismo</a></li> 
                    </ul>
                </div>

                <div class="modulo roxo">
                    <h3>Modulo 05</h3>
                    <ul>
                    <li><a href="exercicio.php?dir=tratamento_erro&file=try_catch">Try catch</a></li>
                    <li><a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">Erros Personalizados</a></li>  
                    </ul>
                </div>

                <div class="modulo laranja">
                    <h3>Modulo 06</h3>
                    <ul>
                    <li><a href="exercicio.php?dir=sessao&file=basico_sessao">Sessão</a></li>
                    <li><a href="exercicio.php?dir=sessao&file=gerenciando_sessao">Gerenciando Sessão</a></li>    
                    </ul>
                </div>

                
            </nav>
        </div>
    </main>
    <footer class="rodape">
        3B1 Novotec <?= date('Y') ?>
    </footer>
    <!-- <nav>teste</nav>
    <div>teste</div>
    <span>teste</span> -->
</body>
</html>