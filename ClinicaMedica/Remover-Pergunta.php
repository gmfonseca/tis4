<?php 
   include "Conexao.php";
                
    //INICIALIZANDO AS VARIÁVEIS
    $id = intval($_GET['id']);
    
                
    //ENVIANDO A QUERY PARA O BANCO DE DADOS
    $query = "DELETE FROM respostacerta WHERE cod_pergunta='$id'";
    $conexao->query($query);

    $query = "DELETE FROM respostaerrada WHERE cod_pergunta='$id'";
    $conexao->query($query);

    $query = "DELETE FROM pergunta WHERE codigoPergunta='$id'";
    
    //VERIFICANDO SE OS DADOS FORAM INSERIDOS COM SUCESSO
    if($conexao->query($query)=== TRUE){
        header("Location: Admin.php");
    }else{
        echo "Erro ao Inserir";
    }

    //ENCERRANDO A CONEXÃO
    $conexao->close();
?>