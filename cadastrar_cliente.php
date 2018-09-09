<!doctype html>


<html lang="pt-br">
    <?php include ("_head"); ?>
    <body>
    <?php include ("_navbar"); ?>

        <div class="container">
            <form class="form-horizontal" method="post" action="crud/cadastrar_cliente.php">
                <div class="form-group">
                    <label for="nome" class="col-md-1 control-label">Nome</label>
                    <div class="col-md-11">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-1 control-label">Email</label>
                    <div class="col-md-11">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefone" class="col-md-1 control-label">Telefone</label>
                    <div class="col-md-11">
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
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