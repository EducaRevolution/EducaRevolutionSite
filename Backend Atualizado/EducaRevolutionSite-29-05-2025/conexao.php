<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_educarevolution";

$conexao = new mysqli($servername, $username, $password, $database);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>