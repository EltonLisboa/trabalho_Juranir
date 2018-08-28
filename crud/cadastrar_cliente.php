<?php
    require("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_cadastro = date('Y-m-d H:i');
    $status = 'Ativo';

    $sql = "INSERT INTO cliente (nome, email, telefone, data_cadastro, status) VALUES ('$nome', '$email', '$telefone', '$data_cadastro', '$status')";
    $query = mysqli_query($conexao, $sql);
    fecharConexao($conexao);

    if($query)
        header("Location: ../listar_clientes.php");
    else
        echo "Houve um erro ao tentar cadastrar o cliente";