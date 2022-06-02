<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Johannes Rey");
$cad->setEmail("johannespablorey@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

?>