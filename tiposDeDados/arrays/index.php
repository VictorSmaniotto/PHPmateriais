<?php

    $a = [1, 2 ,3];
    //Utilizamos a função print_r() para imprimir todo um array
    print_r($a); 
    
    echo '<br>';

    //Podemos imprimir dados dentro de cada elemento do array com um echo e com print_r()
    echo $a[0];
    echo '<br>';
    print_r($a[2]);
    echo '<br>';
    //Podemos inserir dados de diferentes tipos no mesmo array
    $b = ["Victor", 23, True];
    print_r($b);