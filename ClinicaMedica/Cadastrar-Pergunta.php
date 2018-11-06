<?php 
    include "Conexao.php";
                
    //INICIALIZANDO AS VARIÁVEIS
    $pergunta = isset($_POST['tPergunta'])? $_POST['tPergunta']: '';
    $correta = isset($_POST['tAlterC']) ? $_POST['tAlterC']: '';
    $errada1 = isset($_POST['tAlterE1']) ? $_POST['tAlterE1']: '';
    $errada2 = isset($_POST['tAlterE2']) ? $_POST['tAlterE2']: '';
    $errada3 = isset($_POST['tAlterE3']) ? $_POST['tAlterE3']: ''; 
    $tipo = isset($_POST['tTipo']) ? $_POST['tTipo']: ''; 
                
    //ENVIANDO A QUERY PARA O BANCO DE DADOS
    $query = "INSERT INTO pergunta(descricao,tipoQuestao,cod_Questionario) VALUES('$pergunta','$tipo',0)";
    $conexao->query($query);
    
    $sql = "SELECT codigoPergunta FROM pergunta WHERE descricao = '$pergunta'";
    $result = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_assoc($result);

    $pergunta_id = $resultado['codigoPergunta'];

    $query = "INSERT INTO respostacerta(descricao,cod_pergunta) VALUES('$correta','$pergunta_id')";
    $conexao->query($query);

    $query = "INSERT INTO respostaerrada(descricao,cod_pergunta) VALUES('$errada1','$pergunta_id')";
    $conexao->query($query);

    $query = "INSERT INTO respostaerrada(descricao,cod_pergunta) VALUES('$errada2','$pergunta_id')";
    $conexao->query($query);

     $query = "INSERT INTO respostaerrada(descricao,cod_pergunta) VALUES('$errada3','$pergunta_id')";
    
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




