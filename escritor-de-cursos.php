<?php
//Nova forma de escrever um curso e adiocionar um novo arquivo

//$arquivo = fopen('lista-cursos.txt','w');
$curso = 'Novo Curso';

file_put_contents('novo-curso.txt',$curso);
//Pronto adicionei um cutso e ele sobrescreveu o que estava la que nem o "w" fez se eu quiser adicionar um curso na
//ultima linha eu uso o FILE_APPEND E FICA ASSIM
$curso = 'novo Curso 2'.PHP_EOL;
file_put_contents('novo-curso.txt',$curso,FILE_APPEND);




//fwrite($arquivo,$curso);

//fclose($arquivo);