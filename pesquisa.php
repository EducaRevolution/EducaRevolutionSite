<?php
// Suponha que a conexão já foi criada antes com:
// $conexao = mysqli_connect("localhost", "usuario", "senha", "nome_do_banco");

$busca = '';
$aulas = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['limpar'])) {
        // Redireciona para limpar a busca
        header("Location: aulas.php");
        exit;
    }

    if (!empty($_POST['busca'])) {
        $busca = trim($_POST['busca']);

        $stmt = mysqli_prepare($conexao, "SELECT * FROM tb_videos WHERE nm_titulo LIKE ?");
        $param = "%$busca%";
        mysqli_stmt_bind_param($stmt, "s", $param);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $aulas = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    } else {
        // Se o campo estiver vazio, busca tudo
        $query = "SELECT * FROM tb_videos";
        $result = mysqli_query($conexao, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $aulas = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    }
} else {
    // Se a página for acessada direto (sem envio de formulário), mostra tudo
    $query = "SELECT * FROM tb_videos";
    $result = mysqli_query($conexao, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $aulas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
?>
