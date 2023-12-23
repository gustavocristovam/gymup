<?php
session_start();
include('connect.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../gymup/index.html');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['user']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "select * from user where username = '{$usuario}' and password = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
?>