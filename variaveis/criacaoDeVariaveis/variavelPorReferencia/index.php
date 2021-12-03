<?php

    $x = 10;

    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 10;

    echo "Atribuição após referencia";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;

    echo "Atribuição após referencia 2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $nome = "Victor";
    $nome2 =& $nome;

    echo "Atribuição após referencia";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

    $nome = "João";

    echo "Atribuição após referencia";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";


