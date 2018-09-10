<?php
    require_once("../db/conexao.php");

    $conn = Conexao::getInstance();

    $nomeFuncao = $_POST['funcao'];


    $sql = "INSERT INTO funcao (nome_funcao) VALUES ('$nomeFuncao')";
    $query = mysqli_query($conn, $sql);

    if($query)
        echo "Função cadastrada";
    else
        echo "Houve um erro ao tentar cadastrar a Função";
