<?php

    //Crie um array associativo com características de uma pessoa
    //Desafio, faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja


    $aluno = [
        'nome' => 'Pamela',
        'sobrenome' => 'Rodrigues de Oliveira',
        'idade' => 16,
        'curso' => 'Ensino Médio'
    ];

    $nome = $aluno['nome'];
    $sobrenome = $aluno['sobrenome'];
    $idade = $aluno['idade'];
    $curso = $aluno['curso'];

    echo "Aluno(a) $nome $sobrenome, cursante do $curso, foi convidado(a) para participar da turma de teatro depois das aulas.<br>";
    echo "Caso seja menor de idade, deve apresentar a confirmação de participação assinada pelos pais ou responsáveis.<br>";
    if($idade < 18){
        echo "Verificação automática: <br>";
        echo "Aluno(a) é menor de idade e precisará da assinatura dos pais ou responsáveis<br>";
    }

    //posso colocar a variavel com a chave do array no if

    if($aluno['idade']){
        echo "$nome é menor de idade";
    }