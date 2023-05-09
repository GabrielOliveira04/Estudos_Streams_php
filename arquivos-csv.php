<?php

$meuscursos = file('lista-cursos.txt');
$outroscursos = file('novo-curso.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meuscursos as $curso){
    $linha = [trim($curso), 'sim'];

    fputcsv($arquivoCsv, $linha, ';');
}


foreach ($outroscursos as $curso){
    $linha = [trim($curso), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);