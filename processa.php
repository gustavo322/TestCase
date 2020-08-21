<?php 

session_start();

include_once("conexao.php");
        $erro = false;
		$login      = $_POST['form-username'];
        $senha = $_POST['form-password'];
        $Id = null;

        $sql = "select * from usuario where usu_login = '$login' and usu_senha = '$senha'";
        $dados= null;

        $stmt = $pdo->prepare( $sql );
        $stmt->execute(array(':usu_login' => $login));
        
        $dados =$stmt->fetch(PDO::FETCH_ASSOC);
        
		if ($dados['usu_login'] == null){
           header("Location: /TestCase");
            
        }else {
            $Id = $dados['usu_id'];
            $_SESSION['usuId'] = $Id;
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;

            header("Location: Home");    
                 

            
        }
?>
