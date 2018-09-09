<?php
require("conexao.php");

$sql = "SELECT nome, login FROM faculdade.usuario";
$query = mysqli_query($conexao, $sql);

# validação...
if (!is_object($query)) {
    die('Cadastro não encontrado!');
} else {
    while ($linha = mysqli_fetch_array($query)) {
        echo $linha['nome']; echo ' - '; echo $linha['login'];
        echo '<br />';
    }
}
?>
