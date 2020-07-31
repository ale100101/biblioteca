<?php

$bd = new SQLite3("livros.db");

$sql =  " SELECT * FROM livros";       
$livros = $bd->query($sql);    




$livro1 = ["nome"=> "Viva (Morra) a organização","autor"=> "Robert Townsend","capa"=> "img/download.jpg",];
$livro2 = ["nome"=> "A menina qua roubava livros","autor"=> "Markus Zusak","capa"=> "https://i.pinimg.com/originals/ad/f0/b8/adf0b8235bdda40c2a0bd090698345a1.jpg",];
$livro3 = ["nome"=> "The gril in Red","autor"=> "Christina Henry","capa"=> "https://i.pinimg.com/236x/cb/45/fd/cb45fd3f3574f30a10a7c679839695af.jpg",];
$livro4 = ["nome"=> "Coraline","autor"=> "Neil Gaiman","capa"=> "https://i.pinimg.com/originals/d8/16/c4/d816c439000eea434f997ff7cedebc42.jpg",];
$livro5 = ["nome"=> "Kama Sutra","autor"=> "Richar Borton","capa"=> "https://lojasaraiva.vteximg.com.br/arquivos/ids/7052177/639307.jpg?v=637076519472470000",];
$livro6 = ["nome"=> "Kama Sutra","autor"=> "Richar Borton","capa"=> "https://lojasaraiva.vteximg.com.br/arquivos/ids/7052177/639307.jpg?v=637076519472470000",];
//$livros  = [$livro1,$livro2,$livro3,$livro4,$livro5,$livro6];
