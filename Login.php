<?php

session_start();

require 'conexao.php';

$conexao = Conexao::getInstance();

// Recebe os dados do formulário
$login = (isset($_POST['login'])) ? $_POST['login'] : '' ;
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '' ;


// Validações de preenchimento e-mail e senha se foi preenchido o e-mail
if (empty($login)):
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha seu login!');
	echo json_encode($retorno);
	exit();
endif;

if (empty($senha)):
	$retorno = array('codigo' => 0, 'mensagem' => 'Preencha sua senha!');
	echo json_encode($retorno);
	exit();
endif;


// Válida os dados do usuário com o banco de dados
$sql = 'SELECT id_usuario, nome, login ,senha FROM usuario WHERE login = ? LIMIT 1';
$stm = $conexao->prepare($sql);
$stm->bindValue(1, $login);
$stm->execute();
$retorno = $stm->fetch(PDO::FETCH_OBJ);


// Válida a senha
if(!empty($retorno) && ($senha == $retorno->senha)):
	$_SESSION['id_usuario'] = $retorno->id_usuario;
	$_SESSION['nome'] = $retorno->nome;
	$_SESSION['login'] = $retorno->login;
	//$_SESSION['tentativas'] = 0;
	$_SESSION['logado'] = 'SIM';
else:
	$_SESSION['logado'] = 'NAO';
endif;


// Se logado envia código 1, senão retorna mensagem de erro para o login
if ($_SESSION['logado'] == 'SIM'):
	$retorno = array('codigo' => 1, 'mensagem' => 'Logado com sucesso!');
	echo json_encode($retorno);
	exit();
else:
	$retorno = array('codigo' => 0, 'mensagem' => 'Usuário não autorizado!');
	echo json_encode($retorno);
	exit();	
endif;