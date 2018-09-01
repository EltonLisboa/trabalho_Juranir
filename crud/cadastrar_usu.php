<?php
require("conexao.php");

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$id_funcao = $_POST['id_funcao'];


$sql = "INSERT INTO usuario (nome, login, senha, id_funcao) VALUES ('$nome', '$login', '$senha', '$id_funcao')";
$query = mysqli_query($conexao, $sql);
fecharConexao($conexao);

