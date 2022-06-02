<?php

session_id('vvpo0d99ig20j14h0t8dnqs0s9');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>