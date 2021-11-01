<?php

   

//True
if(is_int(5)){
    echo "É um inteiro <br>";
}

//False - Não vai imprimir nada na tela
if(is_int(5.1)){
    echo "Não é um inteiro <br>";
}

//fazendo teste em variável
$n = 12;
if(is_int($n)){
    echo "O valor dentro desta variável é inteiro";
}