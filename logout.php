<?php
session_start();
include("conexao.php");

// Finaliza a sessão no banco, se ela estiver aberta
if (isset($_SESSION['id_sessao']) && is_numeric($_SESSION['id_sessao'])) {
    $stmtFim = $conexao->prepare("UPDATE tb_sessoes SET fim_sessao = NOW() WHERE id_sessao = ?");
    $stmtFim->bind_param("i", $_SESSION['id_sessao']);
    $stmtFim->execute();
}



session_unset();
session_destroy();

header("Location: cadastro.php");
exit;

?>
