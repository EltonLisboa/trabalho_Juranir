<?php
    require_once("../db/conexao.php");

    $conn = Conexao::getInstance();

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $id_funcao = $_POST['id_funcao'];


    $sql = "INSERT INTO usuario (nome, login, senha, id_funcao) VALUES ('$nome', '$login', '$senha', '$id_funcao')";
    $query = mysqli_query($conn, $sql);

    if($query)
        echo "Usuário cadastrado com sucesso";
    else
        echo "Houve um erro ao tentar cadastrar o cliente";

