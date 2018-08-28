<?php
	
	session_start();


	if(isset($_SESSION['logado']) && $_SESSION['logado'] == 'SIM'):
		header("Location: pagina_inicial.php");
	endif;
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
	<title>Tela de Login</title>
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
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>

	.fundo{
		background-image: url(images/fundo2.png);
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	}

</style>



</head>


<body>
	
	<div class="limiter">
		<div class="container-login100 fundo" >
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/logobarba3.png);">					
				</div>
                    <div id="alerta" class="alert alert-danger" style="display: none;">
                        <span class="glyphicon glyphicon-exclamation-sign"></span>
                        <span id="mensagem"></span>
                    </div>
				<form id="form_login" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="O Login é obrigatório">
						<span class="label-input100">Login</span>
						<input id="login" class="input100" type="text" name="login" placeholder="Informe o usuário">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "A senha é obrigatória">
						<span class="label-input100">Senha</span>
						<input id="senha" class="input100" type="password" name="senha" placeholder="Informe a senha">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">

						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Permanecer conectado
							</label>
						</div>
						<div>
							<a href="#" class="txt1">
								Esqueceu a senha?
							</a>
						</div>
					</div>

						<div class="container-login100-form-btn">
							<button id="btn_login" class="login100-form-btn">
							Entrar
							</button>
						</div>

				</form>
			</div>
		</div>
	</div>
	
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
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
<script>

$('document').ready(function(){

	$("#btn_login").click(function(){
		
		var data = $("#form_login").serialize();
			
		$.ajax({
			type : 'POST',
			url  : 'login.php',
			data : data,
			dataType: 'json',
			beforeSend: function()
			{	
				$("#btn_login").html('Validando ...');
			},
			success :  function(response){						
				if(response.codigo == "1"){	
					$("#btn_login").html('Entrar');
					$("#alerta").css('display', 'none')
					window.location.href = "pagina_inicial.php";
				}
				else{			
					$("#btn_login").html('Entrar');										
					$("#alerta").css('display', 'block');
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
				}
		    }
		});
	});

});

</script>

</body>

</html>