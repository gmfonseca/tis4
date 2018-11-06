<?php 
    include "Conexao.php";
                
    //INICIALIZANDO AS VARIÁVEIS
    $id = isset($_POST['tId'])? $_POST['tId']: '';
    $desc = isset($_POST['tExercicio'])? $_POST['tExercicio']: '';
    
     //ENVIANDO A QUERY PARA O BANCO DE DADOS
    $query = "UPDATE exercicio SET descricao='$desc' WHERE codigoExercicio='$id'";
    
    //VERIFICANDO SE OS DADOS FORAM INSERIDOS COM SUCESSO
    if($conexao->query($query)=== TRUE){
        header("Location: Admin.php");
    }else{
        echo "Erro ao Inserir";
    }

    //ENCERRANDO A CONEXÃO
    $conexao->close();
?>
