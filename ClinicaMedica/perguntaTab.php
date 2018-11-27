<?php

// Verifica se existe a variável txtnome

    // Conexao com o banco de dados
     session_start();
    include "Conexao.php";

    $sql = "SELECT * FROM pergunta ORDER BY RAND() LIMIT 1";
    sleep(0.5);

    $result = mysqli_query($conexao,$sql);
        $pergunta = mysqli_fetch_array($result);
        // Atribui o código HTML para montar uma tabela
    
        $tabela = '<h3 class="ralewayFont center white-text ralewayFont">'.$pergunta["descricao"].'</h3>';

        $return = "$tabela";
    
    echo $return;
?>
