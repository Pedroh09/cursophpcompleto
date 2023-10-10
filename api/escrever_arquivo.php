<div class="titulo">Escrever arquivo</div>


<?php


$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial \n");


//O 'w' indica que o arquivo será aberto no modo de escrita, o que significa que você 
//  pode escrever dados no arquivo.


$str = "segunda Linha \n";
fwrite($arquivo, $str);
fclose($arquivo);


$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteudo ");
fclose($arquivo);

// O modo "a" é usado para abrir um arquivo para escrita, mas ao contrário do modo "w" 
// (escrita), o modo "a" não apaga o conteúdo existente do arquivo. Em vez disso, ele 
// posiciona o ponteiro de escrita no final do arquivo, permitindo que você adicione novos 
// dados ao final do 
// arquivo sem afetar o conteúdo anterior. Se o arquivo não existir, ele será criado.



$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "Com novos valores \n ");
fwrite($arquivo, "adicionados em um segundo momento");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste2.txt', 'x');
fwrite($arquivo, "Arquivo Novo !!!!");
fclose($arquivo);


// //O modo "x" é usado para criar um arquivo somente se ele não existir. 
// Se o arquivo já existir, a função fopen() retornará false e não abrirá
//  o arquivo. Isso é útil quando você deseja criar um arquivo novo e garantir
//   que ele não substitua um arquivo existente com o mesmo nome.



?>