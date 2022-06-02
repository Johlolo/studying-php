<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp8","root","");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 7;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Delete OK!";

?>