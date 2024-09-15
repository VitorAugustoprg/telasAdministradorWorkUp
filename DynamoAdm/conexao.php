<?php 
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'bdworkup');

$conection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('CONEXÃO COM BANCO NÃO ESTABELECIDA')
?>