<?php

//AUTOLOAD NÃO ESTÁ MAIS DISPONÍVEL APÓS PHP8.0

function __autoload($nomeClasse){

    require_once("$nomeClasse.php");

}


$carro = new DelRey();

$carro->acelerar(80);

?>