<?php
    require_once("../db/conexao.php");

    $conn = Conexao::getInstance();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $status = 'Ativo';

    $sql = "INSERT INTO cliente (nome, email, telefone, data_cadastro, status) VALUES ('$nome', '$email', '$telefone', '$data_cadastro', '$status')";
    $query = mysqli_query($conn, $sql);

    if($query)
        header("Location: ../paginas/listarClientes.php");
    else
        echo "Houve um erro ao tentar cadastrar o cliente";
