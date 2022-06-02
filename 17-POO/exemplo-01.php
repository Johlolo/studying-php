<?php

class Pessoa {
    
    public $nome; //Atributo

    public function falar(){  //Método

        return "O meu nome é ".$this->nome;

    }

}

$johannes = new Pessoa();
$johannes->nome = "Johannes Pablo";
echo $johannes->falar();


?>