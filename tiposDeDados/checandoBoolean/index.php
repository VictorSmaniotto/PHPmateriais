<?php
    $a = true;

    if(is_bool($a)){
        echo "$a é boolean <br>";
    }

    if(is_bool(1)){
        echo "1 é um boolean true <br>";
    }

    if(is_bool(false)){
        echo "é um boolean false <br>";
    }

    //Comparando 0 com false é retornado True
    //Podemos entender melhor relacionando a (-).(-) = +
    //False == False = True
    if(0.0 == false){
        echo "0.0 é considerado falso! <br>";
    }