<?php 
    include "Conexao.php";
                
    //INICIALIZANDO AS VARIÁVEIS
    $cont = 1;
    $id = isset($_POST['tId'])? $_POST['tId']: '';
    $pergunta = isset($_POST['tPergunta'])? $_POST['tPergunta']: '';
    $correta = isset($_POST['tAlterC']) ? $_POST['tAlterC']: ''; 
    
     //ENVIANDO A QUERY PARA O BANCO DE DADOS
    $query = "UPDATE pergunta SET descricao='$pergunta' WHERE codigoPergunta='$id'";
    $conexao->query($query);
    
    $sql_pegadados = mysqli_query($conn, "SELECT * FROM respostaErrada WHERE cod_pergunta='$id'");
    while($ln = mysqli_fetch_array($sql_pegadados)){
        $errada = isset($_POST['tAlterE'.cont]) ? $_POST['tAlterE'.cont]: '';
        
        $idErrado = $ln['codigoErrado'];
        $query = "UPDATE respostaErrada SET descricao='$errada' WHERE codigoErrado='$idErrado'";
        $conexao->query($query);
        $cont = $cont+1;
    }

    $query = "UPDATE respostaCerta SET descricao='$correta' WHERE cod_pergunta='$id'";
    
    //VERIFICANDO SE OS DADOS FORAM INSERIDOS COM SUCESSO
    if($conexao->query($query)=== TRUE){
        header("Location: Admin.php");
    }else{
        echo "Erro ao Inserir";
    }

    //ENCERRANDO A CONEXÃO
    $conexao->close();
?>