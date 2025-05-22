<?php
session_start();
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = $_POST['senha'];
    $confirma = $_POST['confirma_senha'];

    if ($senha !== $confirma) {
        echo "<script>alert('As senhas não coincidem.'); window.history.back();</script>";
        exit;
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conexao->prepare("INSERT INTO tb_usuario (nm_usuario, nm_email, nm_senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha_hash);

    if ($stmt->execute()) {
        $_SESSION['id_usuario'] = $stmt->insert_id;
        $_SESSION['nm_usuario'] = $nome;
        header("Location: home.php");
        exit;
    } else {
        echo "<script>alert('Erro ao cadastrar. Verifique se o email já está em uso.'); window.history.back();</script>";
    }
}
?>
