<?php
// 3 Maneiras de lê arquivos.
$cursos = file_get_contents('lista-cursos.txt');
echo $cursos;



//$arquivo= fopen('lista-cursos.txt', 'r');
//$tamanhoDoArquivo = filesize('lista-cursos.txt');

//$cursos = fread($arquivo, $tamanhoDoArquivo);
//echo $cursos;

//fclose($arquivo);


//Enquanto não estiver no fim do arquivo leia o final da linha
//Ele vai verificar se li uma linha ou não e ainda de lê uma linha ela vai posicionar o cursos FGETS
//while(!feof($arquivo)){
   // $curso = fgets($arquivo);
    //echo $curso;
//}
//fclose($arquivo);

