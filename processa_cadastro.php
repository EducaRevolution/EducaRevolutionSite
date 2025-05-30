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

    // Verifica se o e-mail já existe
    $verificaEmail = $conexao->prepare("SELECT id_usuario FROM tb_usuario WHERE nm_email = ?");
    $verificaEmail->bind_param("s", $email);
    $verificaEmail->execute();
    $verificaEmail->store_result();

    if ($verificaEmail->num_rows > 0) {
        echo "<script>alert('Este e-mail já está cadastrado.'); window.history.back();</script>";
        exit;
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conexao->prepare("INSERT INTO tb_usuario (nm_usuario, nm_email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha_hash);

    if ($stmt->execute()) {
        $id_usuario = $stmt->insert_id;

        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['nm_usuario'] = $nome;

        $stmtSessao = $conexao->prepare("INSERT INTO tb_sessoes (id_usuario, inicio_sessao) VALUES (?, NOW())");
        $stmtSessao->bind_param("i", $id_usuario);
        $stmtSessao->execute();

        header("Location: home.php");
        exit;
    } else {
        echo "<script>alert('Erro ao cadastrar.'); window.history.back();</script>";
    }
}
?>

