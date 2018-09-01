<!doctype html>
<html lang="pt-br">
<?php include ("_head"); ?>
<body>
<?php include ("_navbar_usu"); ?>

<div class="container">
    <form class="form-horizontal" method="post" action="crud/cadastrar_usu.php">
        <div class="form-group">
            <label for="nome" class="col-md-1 control-label">Nome</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label for="login" class="col-md-1 control-label">Login</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="login" name="login" placeholder="Login">
            </div>
        </div>
        <div class="form-group">
            <label for="senha" class="col-md-1 control-label">Senha</label>
            <div class="col-md-11">
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
            </div>
        </div>
        <div class="form-group">
            <label for="id_funcao" class="col-md-1 control-label">Função&nbspID</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="id_funcao" name="id_funcao" placeholder="Função ID">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-1 col-md-11">
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>