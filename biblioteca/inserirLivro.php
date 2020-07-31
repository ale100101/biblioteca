<?php
$titulo = $_GET["titulo"];
$autor = $_GET["autor"];
$capa = $_GET["capa"];


$bd = new SQLite3("livros.db");

$sql = "INSERT INTO livros ( titulo, capa, autor) VALUES (
     '$titulo','$capa', '$autor')";
if ($bd->exec($sql)) echo "\nlivro inserido com sucesso\n";
else
echo "erro";




?>