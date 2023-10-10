<div class="titulo">Ler arquivos</div>


<?php

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo,10);
echo '<br>';
echo fread($arquivo,10);
fclose($arquivo);

echo '<hr>';


$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho , '<br>';
echo fread($arquivo,$tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo,),'<br>'; //fgets le linha por linha;
echo fgets($arquivo,),'<br>';
var_dump(fgets($arquivo));
echo "<hr>";
fclose ($arquivo);
?>