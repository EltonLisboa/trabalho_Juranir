<?php
session_start();

if(!isset($_SESSION['logado'])):
	header("Location: index.php");
endif;
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
	<title>SISTEMA ADMINISTRATIVO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/metisMenu.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->

<style>

	.fundo{
		background-image: url(images/fundo_tec.png);
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	}

	.bar_top{
		background-color: #cc6600;			
	}

	a.log_hover:hover{
		color: #cc6600;
	}

	#page_div {
    	position: relative;
    	margin: 0px 0 0 240px;
    	transition: 0.2s ease-out;
    	padding-top: 50px;
	}

</style>
</head>
<body onload="espera_abrir_popup()">
		
		<div class="navbar-header bar_top">
			<div align="right">
			<li class="dropdown open">
            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false" style="color: white;">
            <img src="images/door.png" alt="user-img" width="36" class="img-circle"><b class="hidden-xs" style="color: black;">Sair</b>
            </a>
        
           	<ul class="dropdown-menu dropdown-user">
              	<li><a href="logout.php" class="log_hover"><i class="fa fa-power-off" style="hover"></i>Logout</a></li>
          	</ul>
                        
            </li>
           	</div>
		</div>


		<div class="navbar-default sidebar nicescroll" role="navigation" tabindex="5000" style="overflow: hidden; outline: none;">
            <div class="sidebar-nav navbar-collapse">
                <ul class="" id="side-menu">

                    <li class="nav-small-cap">Menu
                    </li>
                    <li class=""><a href="pagina_inicial.php" class="waves-effect"> Inicio</a>
                    </li>

                    <li><a class="waves-effect" data-toggle="collapse" href="#cadastros"><i class="fa fa-pencil-square-o"></i>  Cadastros<span class="fa arrow"></span></a>
                        <div id="cadastros" class="panel-collapse collapse">
	                        <ul class="nav nav-second-level" style="height: 1px;">
	                            <li><a onclick="carrega('cadastrar_usu.php')" href="#"><i class="fa fa-user"></i> &nbsp Cadastro de Usuários</a></li>
								<li><a onclick="carrega('cadastrar_cliente.php')" href="#"><i class="fa fa-user"></i> &nbsp Cadastro de Clientes</a></li>
	                        </ul>
                        </div>                        
                    </li>

                    <li class=""><a href="" class="waves-effect"></a>
                    	<div style="height: 10px">
                    	</div>
                    </li>
                    <li><a class="waves-effect" data-toggle="collapse" href="#relatorios"><i class="fa fa-file-text-o"></i> Relatórios<span class="fa arrow"></span></a>
                        <div id="relatorios" class="panel-collapse collapse">
                        	<ul class="nav nav-second-level" style="height: 1px;">
                            	<li> <a onclick="carrega('listar_clientes.php')" href="#"><i class="fa fa-files-o"></i> &nbsp Listar Clientes</a> </li>
                        	</ul>
                    	</div>
                    </li>


                </ul>
            </div>
        </div>
    <div style="padding-left: 220px;min-height: 882px;">
	<div id="conteudo" class="container-fluid">		
		<div class="container-login100 fundo">
<!-- 			<div id="page_div">
				<div class="col-lg-14">
					<div class="row">
						<div class="col-md-4">
							<div class="white-box" style="height: 250px;width: 250px;">
							 alguma coisa
							</div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-4">
							<div class="white-box" style="height: 250px;width: 250px;">
							 mais alguma coisa
							</div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-4">
							<div class="white-box" style="height: 250px;width: 250px;">
							se der coloca algo aqui
							</div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-4">
							<div class="white-box" style="height: 250px;width: 250px;">
							mais e mais
							</div>
						</div>
					</div>
				</div>
				<div class="row"></div>
			</div> -->
		</div>
	</div>
</div>


<!--POP_UP - Cadastro de e-mail-->
<!-- Button trigger modal -->
<button hidden id="openModal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">

</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Deseja receber os últimos posts por e-mail? <br>Cadastre-se.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="email/processa_cadastro_email.php" method="POST">
                    <p><input type="email" name="email" placeholder="Informe o e-mail que deseja cadastrar." required></p>
                    <p><input type="submit" value="Cadastrar"></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>

</body>
<footer>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/metisMenu.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/waves.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>	

	<script>

		function carrega(pagina){
			$("#conteudo").load(pagina);
		}
	</script>

    <script type="text/javascript">
        function abrir() {
            document.getElementById('openModal').click();
        }
        function espera_abrir_popup() {
            setTimeout("abrir()", 3000)
        }
    </script>

</footer>
</html>