<?php
require("db/conexao.php");
include("_head");
?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
<?php include("_navbar"); ?>

<div class="container">

    <div class="panel panel-primary" style="border: none">
        <div class="panel-heading" align="center"><h4><b>Usuários Cadastrados</b></h4></div>
        <br/>
        <?php
        $sql = "SELECT * FROM u136429679_facul.cliente";
        $query = mysqli_query($conexao, $sql);

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

<?php include("_js"); ?>

</body>
</html>