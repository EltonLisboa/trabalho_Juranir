<!doctype html>
<html lang="pt-br">
<?php include ("_head"); ?>
<body>
<?php include ("_navbar_usu"); ?>

<div class="container">
    <form class="form-horizontal" method="post" action="crud/cadastrarFuncao.php">
        <div class="form-group">
            <label for="funcao" class="col-md-1 control-label">Função</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="funcao" name="funcao" placeholder="Função">
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
<?php include ("_js.php"); ?>
</html>