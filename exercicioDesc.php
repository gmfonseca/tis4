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
        $tabela = '<div class="row">
                        <h3 class="center white-text">'.$exercicio["descricao"].'</h3> 
                        <a class="waves-effect waves-light btn center" style="width: 100%; height: 3em" onClick="concluirExe()"><i class="material-icons right">check</i> <span style="font-size:3.5em; margin-top: 20em">Concluído</span> </a>
                    </div>';

        $return = "$tabela";

    echo $return;
?>
