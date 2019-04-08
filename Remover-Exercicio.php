<?php 
   include "Conexao.php";
                
    //INICIALIZANDO AS VARIÁVEIS
    $id = intval($_GET['id']);
    
                
    //ENVIANDO A QUERY PARA O BANCO DE DADOS
    $query = "DELETE FROM exercicio WHERE codigoExercicio='$id'";
    
    //VERIFICANDO SE OS DADOS FORAM INSERIDOS COM SUCESSO
    if($conexao->query($query)=== TRUE){
        header("Location: Admin.php");
    }else{
        echo "Erro ao Inserir";
    }

    //ENCERRANDO A CONEXÃO
    $conexao->close();
?>