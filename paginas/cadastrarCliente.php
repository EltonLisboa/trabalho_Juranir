<!doctype html>
<html lang="pt-br">

    
<body>

<?php include("_navbarCliente.php"); ?>

        <div class="container">
            <form class="form-horizontal" method="post" action="../crud/cadastrarCliente.php">
                <div class="form-group">
                    <label for="nome" class="col-md-1 control-label">Nome</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-1 control-label">Email</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefone" class="col-md-1 control-label">Telefone</label>
                    <div class="col-md-10">
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-10">
                        <button type="submit" class="btn btn-default">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>

</body>

<?php include ("_js.php"); ?>

</html>