<?php
	
	session_start();


	if(isset($_SESSION['logado']) && $_SESSION['logado'] == 'SIM'):
		header("Location: pagina_inicial.php");
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

</style>



</head>


<body>

	<div class="limiter">
		<div class="container-login100 fundo" >
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/logobarba4.png);">					
				</div>
				<form id="form_login" class="login100-form validate-form" metod="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="O Login é obrigatório">
						<span class="label-input100">Login</span>
						<input class="input100" type="text" name="login" placeholder="Informe o usuário">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "A senha é obrigatória">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="Informe a senha" autocomplete="">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">

						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Permanecer conectado								
							</label>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button id="btn_login" class="login100-form-btn">
							Entrar
						</button>
					</div>
					
					<div class="row" style="width: 100%; height: 20px;"></div>				
					<div id="alerta" class="alert alert-danger" style="width: 100%;display: none;">
						<div id="msg"></div>
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
	<!-- <script src="js/main.js"></script> -->
	
<script>

$('document').ready(function(){


	$("#btn_login").click(function(){
		
		var data = $("#form_login").serialize();
		// var login=$('#login').val();
		// var senha="<?php echo sha1(md5("+$('#senha').val()+")); ?>";
		// var data = "login="+login+"&senha="+senha;

		$.ajax({
			type : 'POST',
			url  : 'login.php',
			data : data,
			dataType: 'json',
			beforeSend: function()
			{	
				$("#btn_login").html('Validando ...');
			},
			success : function(resposta){						
				if(resposta.codigo == "1"){					
					$("#btn_login").html('Entrar');					
					window.location.href = "pagina_inicial.php";
					alert(resposta.mensagem);
				}
				else{								
					
					$("#btn_login").html('Entrar');
					$("#alerta").css("display","block");
					
					alert(resposta.mensagem);
					
				}
		    }

		});


	});

});

</script>

</body>

</html>