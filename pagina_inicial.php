<?php
session_start();

if(!isset($_SESSION['logado'])):
	header("Location: index.php");
endif;
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
	<title>SKEGGHEIM BARBER SHOP</title>
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
		background-image: url(images/salao.jpg);
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
<body>
		<div class="navbar-header bar_top">
			<li class="dropdown open">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="true" style="color: white;">
                        	<img src="images/gilete.png" alt="user-img" width="36" class="img-circle"><b class="hidden-xs" style="color: black;">Sair</b>
                        </a>
        
                        	<ul class="dropdown-menu dropdown-user">
                            	<li><a href="logout.php" class="log_hover"><i class="fa fa-power-off" style="hover"></i>Logout</a></li>
                        	</ul>
                        
            </li>
		</div>

	<div class="limiter">		
		<div class="container-login100 fundo">
			<div id="page_div">
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
<!--===============================================================================================-->
	<script src="js/main.js"></script>	
</footer>
</html>