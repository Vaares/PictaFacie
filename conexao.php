<?php 

$usuario = 'root';
$senha = '';
$database = 'pictafacie';
$host = 'localhost';

$msqli = new mysqli($host,$usuario,$senha,$database);

if($msqli->error) {
    die("Falha ao conectar ao banco de dados: " . $msqli->error);
}