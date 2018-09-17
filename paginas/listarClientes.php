<?php
require("../db/conexao.php");

$conn = Conexao::getInstance();

include("_head.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>


<div class="container">

    <div class="panel panel-primary" style="border: none">
        <div class="panel-heading" align="center"><h4><b>Usuários Cadastrados</b></h4></div>
        <br/>
        <?php
        $sql = "SELECT * FROM cliente";
        $query = mysqli_query($conn, $sql);

        while ($linha = mysqli_fetch_array($query)) {

            echo 'Nome: ';
            echo $linha['nome']; ?> <br/> <?php
            echo 'Email: ';
            echo $linha['email']; ?> <br/> <?php
            echo 'Telefone: ';
            echo $linha['telefone']; ?> <br/> <?php
            echo 'Data de Cadastro: ';
            echo $linha['data_cadastro']; ?> <br/> <?php
            echo 'Status: ';
            echo $linha['status']; ?> <br/> <hr><?php

        } ?>
    </div>

</div>


</body>

</html>