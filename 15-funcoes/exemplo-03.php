<?php

function ola($texto = "Mundo", $periodo){

    return "Olá $texto! $periodo!<br>";

}

echo ola("Mundo", "Bom dia");
echo ola("", "Boa noite");
echo ola("Johannes", "Boa tarde");
echo ola("Jhemila", "");

?>