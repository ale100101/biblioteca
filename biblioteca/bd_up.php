<?php
$bd = new SQLite3("livros.db");
        $sql  = "DROP TABLE IF EXISTS livros";
         if ($bd->exec($sql)) echo "\ntabela apagada\n";

$sql = "CREATE TABLE livros (
        Id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR (200) NOT NULL,
        capa VARCHAR (200),
        autor VARCHAR (200)
        )
";
if ($bd->exec($sql)) echo "\ntabela criada\n";
else

echo "erro";
   

if ($bd->exec($sql)) echo "\nlivro inserido com sucesso\n";
else
echo "erro";
