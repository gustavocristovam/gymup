<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '8j3L1PCmnbAQa4UTkhg8');
define('DB', 'data_gym');


$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>