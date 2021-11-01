<?php
    //Não vai aparecer nada no navegador
    echo NULL;

    //Para iniciar uma variável sem valor podemos atribuir NULL a ela
    $nome = NULL;

    //Checando NULL
    if(is_null($nome)){
        echo "O valor desta variável é nulo";
    }