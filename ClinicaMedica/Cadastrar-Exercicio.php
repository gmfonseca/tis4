<?php 
    include "Conexao.php";
                
    //INICIALIZANDO AS VARIÁVEIS
    $desc = isset($_POST['tExercicio'])? $_POST['tExercicio']: '';

    //ENVIANDO A QUERY PARA O BANCO DE DADOS
    $query = "INSERT INTO exercicio(descricao) VALUES('$desc')";
    
    //VERIFICANDO SE OS DADOS FORAM INSERIDOS COM SUCESSO
    if($conexao->query($query)=== TRUE){
        header("Location: Admin.php");
    }else{
        var_dump($query);
        echo "Erro ao Inserir";
    }

    //ENCERRANDO A CONEXÃO
    $conexao->close();
?>




