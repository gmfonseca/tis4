<?php 
    include "Conexao.php";
                
    //INICIALIZANDO AS VARIÁVEIS
    $cont = 1;
    $id = isset($_POST['tId'])? $_POST['tId']: '';
    $pergunta = isset($_POST['tPergunta'])? $_POST['tPergunta']: '';
    $correta = isset($_POST['tAlterC']) ? $_POST['tAlterC']: ''; 
$errada1 = isset($_POST['tAlterE1']) ? $_POST['tAlterE1']: '';
$errada2 = isset($_POST['tAlterE2']) ? $_POST['tAlterE2']: '';
$errada3 = isset($_POST['tAlterE3']) ? $_POST['tAlterE3']: '';
    
     //ENVIANDO A QUERY PARA O BANCO DE DADOS
    $query = "UPDATE pergunta SET descricao='$pergunta' WHERE codigoPergunta='$id'";
    $conexao->query($query);
    
    $sql_pegadados = mysqli_query($conexao, "SELECT * FROM respostaerrada WHERE cod_pergunta='$id'");
    while($ln = mysqli_fetch_array($sql_pegadados)){
    
        $idErrado = $ln['codigoErrado'];
        if($cont==1){
            $query = "UPDATE respostaerrada SET descricao='$errada1' WHERE codigoErrado='$idErrado'";
        }elseif ($cont == 2){
             $query = "UPDATE respostaerrada SET descricao='$errada2' WHERE codigoErrado='$idErrado'";
        }else{
            $query = "UPDATE respostaerrada SET descricao='$errada3' WHERE codigoErrado='$idErrado'";
        }
        
        $conexao->query($query);
        $cont = $cont+1;
    }

    $query = "UPDATE respostacerta SET descricao='$correta' WHERE cod_pergunta='$id'";
    
    //VERIFICANDO SE OS DADOS FORAM INSERIDOS COM SUCESSO
    if($conexao->query($query)=== TRUE){
        header("Location: Admin.php");
    }else{
        echo "Erro ao Inserir";
    }

    //ENCERRANDO A CONEXÃO
    $conexao->close();
?>
