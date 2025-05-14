<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['login'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $stmt = $conexao->prepare("SELECT id_usuario, nm_usuario, nm_senha FROM tb_usuario WHERE nm_email = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if ($senha === $user['nm_senha']) { // ou use password_verify se estiver criptografada
            $_SESSION['id_usuario'] = $user['id_usuario'];
            $_SESSION['nm_usuario'] = $user['nm_usuario'];
            header("Location: home.php");
            exit;
        } else {
            echo "<script>alert('Senha incorreta!'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado!'); window.location.href='login.php';</script>";
    }
}
?>
