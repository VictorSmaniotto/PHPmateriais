<?php
//Imprima 3 floats e utilize a função is_float()

$a = 1.1;
$b = 5.2;
$c = -3.4;

echo $a;
echo '<br>';
if(is_float($b)){
    echo 'Float que passou na verificação<br>';
}

if(is_float($c)){
    echo 'Float negativo que passou na outra verificação';
}