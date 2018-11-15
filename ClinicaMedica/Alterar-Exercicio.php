<?php 
    include "Conexao.php";
                
    //INICIALIZANDO AS VARIÁVEIS
    if(isset($_FILES['arquivo'])){
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));//PEGA O TIPO DO ARQUIVO DO NOME COMO POR EXEMPLO .JPG OU .PNG
        $novo_nome = md5(time()).$extensao;//NOME CRIPTOGRAFADO
        $diretorio = "Imgs/";            
        move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome);            
    }
    $id = isset($_POST['tId'])? $_POST['tId']: '';
    $desc = isset($_POST['tExercicio'])? $_POST['tExercicio']: '';
    
     //ENVIANDO A QUERY PARA O BANCO DE DADOS
    $query = "UPDATE exercicio SET descricao='$desc',imagem='$novo_nome' WHERE codigoExercicio='$id'";
    
    //VERIFICANDO SE OS DADOS FORAM INSERIDOS COM SUCESSO
    if($conexao->query($query)=== TRUE){
        header("Location: Admin.php");
    }else{
        echo "Erro ao Inserir";
    }

    //ENCERRANDO A CONEXÃO
    $conexao->close();
?>
