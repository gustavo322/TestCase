<?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header("Location: /TestCase");
  }
 $text  = $_POST['editor1'];
 $CPF  = $_POST['form-cpf'];
 
 
$logado = $_SESSION['login'];
$ID_USU = $_SESSION['usuId'];
$dados= null;
			include_once("conexao.php");
			
			$sql = "UPDATE `conta` SET `cont_saldo`=  '$text' WHERE `cont_usuId` = $ID_USU";
			$pdo->exec( $sql );
		header("Location: Deposito.php");
		
		
?>