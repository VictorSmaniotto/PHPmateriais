<?php

    echo "Testando textos com aspas duplas<br>";
    echo 'Testando textos com aspas simples<br>';
    //usando aspas em strings
    //não pode usar do mesmo tipo de representação
    echo "Ela disse: 'Olá!' <br>";
    echo 'Ela disse: "Olá" <br>';
    //Aspas duplas interpretam variáveis
    $idade = 20;
    echo "Ela tem $idade anos <br>";
    echo 'Ela tem $idade anos';