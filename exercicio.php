<?php

// Verifica se existe a variável txtnome

    // Conexao com o banco de dados
     session_start();
    include "Conexao.php";

    $sql = "SELECT * FROM exercicio ORDER BY RAND() LIMIT 1";
    sleep(0.5);

    $result = mysqli_query($conexao,$sql);
        $exercicio = mysqli_fetch_array($result);
        // Atribui o código HTML para montar uma tabela
        $tabela = '<img src="Imgs/'.$exercicio["imagem"].'">';

        $return = "$tabela";

    echo $return;
?>
