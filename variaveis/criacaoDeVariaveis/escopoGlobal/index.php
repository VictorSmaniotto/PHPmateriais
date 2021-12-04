<?php
    /*Alteração na variável em qualquer bloco de cod que não esta dentro de uma função*/
    $teste = "asd";

    echo "$teste global 1 <br>";
    /*If compartilhando o escopo global da variavel teste*/
    if(5>2){

        $teste = "dsa";

        echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

    function funcao(){

        $teste = "skjdf";

        echo "$teste local 2 <br>";
    }
    
    funcao();
  # EU MUDO O VALOR DA VARIÁVEL NO ESCOPO GLOBAL SE EU ALTERO ELA NO ESCOPO LOCAL, ACESSANDO PELA INSTRUÇÃO GLOBAL
    function testandoGlobal(){

        global $teste;

        $teste = 2;
        echo "$teste global função <br>";
    }

    testandoGlobal();

    echo "$teste global <br>";