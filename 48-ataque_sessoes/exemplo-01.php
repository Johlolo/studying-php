<?php

session_start();

// Depois de verificar login e senha reinicia o ID da sessão
session_destroy();

session_start();

session_regenerate_id();

echo session_id();

?>