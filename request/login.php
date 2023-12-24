<?php
session_start();
include('connect.php');

if (empty($_POST['user']) || empty($_POST['password'])) {
    echo 'NADA INFORMADO!';
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['user']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

// Usando declaração preparada para evitar SQL Injection
$query = "SELECT * FROM user WHERE username = ? AND password = ?";
$stmt = mysqli_prepare($conexao, $query);

mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$row = mysqli_num_rows($result);

mysqli_stmt_close($stmt);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ../dashboard/');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: error.php');
    exit();
}
?>
