<?php 
include "Conexao.php";


    $usuario = isset($_POST['tUsuario'])? $_POST['tUsuario']: '';
    $senha = isset($_POST['tSenha'])? $_POST['tSenha']: '';
    $email = isset($_POST['tEmail'])? $_POST['tEmail']: '';
    $genero = isset($_POST['tGenero'])? $_POST['tGenero']: '';
    //$senha = md5($senha);//CRIPTOGRAFA A SENHA

    $query = "INSERT INTO usuario(nome,email,senha,genero,tipo_usuario) VALUES('$usuario','$email','$senha','$genero',0)";

    if($conexao->query($query)=== TRUE){
        header("Location: index.php");
    }else{
        var_dump($query);
        echo "Erro ao Inserir";
    }

    //ENCERRANDO A CONEXÃO
    $conexao->close();
?>