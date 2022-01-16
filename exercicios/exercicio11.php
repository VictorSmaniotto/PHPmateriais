<?php 

    /*Teste a expressão "5"*12
    Utilize a função gettype()
    com o resultado como parâmetro para checar o tipo
     resultante da operação*/

    $teste = "5" * 12;
    echo $teste;
    echo "<br>";
    echo gettype($teste);
    echo "<br>";
    echo gettype([]);
    echo "<br>";
    echo gettype(10.1);
    echo "<br>";
    echo gettype("Oi");

?>