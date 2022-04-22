<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias); //explicação: exibe o formato/sqnc do código


$nome = 'Eduardo';
$idade = 17;

//var_dump($nome); //explixação: informações sobre oque temos
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ",$nome. " compete na categoria infantil";
    }
}
else if($idade >= 13 && $idade <= 17)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador ",$nome. " compete na categoria adolescente";
    }
}
else {
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ",$nome. " compete na categoria adulto";
    }
}