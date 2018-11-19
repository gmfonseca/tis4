<?php 
session_start();//INICIA A SESSÃO
include_once("Conexao.php");
$_SESSION['LogadoAdm'] = false;

if((isset($_POST['tUsuario']))&& (isset($_POST['tSenha']))){

$usuario = isset($_POST['tUsuario'])? $_POST['tUsuario']: '';
    $senha = isset($_POST['tSenha'])? $_POST['tSenha']: '';
    //$senha = md5($senha);//CRIPTOGRAFA A SENHA

    $sql = "SELECT * FROM usuario WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
    //$sql = "SELECT * FROM $tabela WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
    $result = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_assoc($result);

    if(empty($resultado)){
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: login.php");
    }else if(isset($resultado)){
        $_SESSION['usuarioCodigo'] = $resultado['codigo'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];
        $_SESSION['usuarioTipo'] = $resultado['tipo_usuario'];
        if($_SESSION['usuarioTipo'] == 1){
			//Criação da variável que valida o login dos ADMs
			$_SESSION['LogadoAdm'] = true;
            header("Location: admin.php");
        }else {
			//Criação da variável que valida o login dos ADMs
			$_SESSION['LogadoAdm'] = false;
            header("Location: index.php");
        }
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: login.php");
    }

}else{    
    $_SESSION['LoginErro'] = "Usuário ou Senha Inválido!";
    header("Location: login.php");
}
?>
