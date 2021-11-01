<?php

    class Pessoa{

        function falar(){
            echo "Olá, pessoal!";
        }
    }

    $victor = new Pessoa();
    $victor -> nome = "Victor";

    echo $victor->nome;
    echo '<br>';
    $victor->falar();