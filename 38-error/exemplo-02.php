<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);  // não exibir erros

$nome = $_GET['nome'];

echo $nome;

?>