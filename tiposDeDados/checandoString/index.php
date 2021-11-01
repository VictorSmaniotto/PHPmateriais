<?php

    $str = "Victor";
    $num = 20;

    if(is_string($str)){
        echo "$str é uma string";
    }

    if(is_string($num)){
        echo "$num é uma string";
    }

    if(is_string("String")){
        echo "<br>É uma string";
    }