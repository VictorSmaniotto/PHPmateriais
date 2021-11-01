<?php
    //imprima textos com aspas duplas e também com aspas simples
    $nome = "Victor";
    $sobrenome = 'Smaniotto';

    echo "$nome $sobrenome<br>";

    if(is_string($sobrenome)){
        echo "$sobrenome é uma string";
    }