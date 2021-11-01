<?php
    /*Variável de Variável
    Criamos uma variável a partir do valor da variável origem
    Por exemplo:
        $x = 'nome'   valor da variável
        $$x = 'Victor'   $$ indica que será criada outra variável, cujo nome sera o valor de $x ($x = nome)
        Neste caso, a variável gerada se chamará $nome  */
    $x = "nome";
    echo "$x <br>";

    $$x = "Victor";

    echo "$nome<br>";