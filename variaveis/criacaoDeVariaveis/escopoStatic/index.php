<?php
    #variável de escopo local sempre resetada ao final da função
    function teste(){

        $a = 0;
        $a++;

        echo "$a <br>";
    }

    teste();
    teste();
    teste();
    #variável de escopo static mantendo o valor ao final da função e sendo alterado com as chamadas
    function testeStatic(){

        static $a = 0;
        $a++;

        echo "$a <br>";

    }

    testeStatic();
    testeStatic();
    testeStatic();