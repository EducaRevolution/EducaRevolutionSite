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

    // Ajustado: incluindo senha no banco (se você tiver o campo)
    $stmt = $conexao->prepare("INSERT INTO tb_usuario (nm_usuario, nm_email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha_hash);

    if ($stmt->execute()) {
        $id_usuario = $stmt->insert_id;

        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['nm_usuario'] = $nome;

        // Cria registro da sessão (início da contagem de tempo)
        $stmtSessao = $conexao->prepare("INSERT INTO tb_sessoes (id_usuario, inicio_sessao) VALUES (?, NOW())");
        $stmtSessao->bind_param("i", $id_usuario);
        $stmtSessao->execute();

        header("Location: home.php");
        exit;
    } else {
        echo "<script>alert('Erro ao cadastrar. Verifique se o email já está em uso.'); window.history.back();</script>";
    }
}
?>
