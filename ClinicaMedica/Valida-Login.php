<?php 
session_start();//INICIA A SESSÃO
include_once("Conexao.php");

if((isset($_POST['usuarioID']))&& (isset($_POST['senhaID']))){
    $usuario = mysqli_real_escape_string($conn, $_POST['usuarioID']);//TIRA CARACTERES ESPECIAIS
    $senha = mysqli_real_escape_string($conn,$_POST['senhaID']);

    //$senha = md5($senha);//CRIPTOGRAFA A SENHA

    $sql = "SELECT * FROM $tabela WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_assoc($result);

    if(empty($resultado)){
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: index.php");
    }else if(isset($resultado)){
        $_SESSION['usuarioCodigo'] = $resultado['codigo'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];
        if($_SESSION['usuarioCodigo'] == 1){
            header("Location: admin.php")
        }else {
            header("Location: index.php")
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
