<div class="titulo">Datas 01</div>


<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR' , 'Portuguese_Brazil');
echo time() . "<br>";
echo date('D,d \d\e M \d\e Y h:i A ') . "<br>";
echo strftime('%A,%d de     %B de %Y'  , time());

?>