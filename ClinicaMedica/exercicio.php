<?php

// Verifica se existe a variável txtnome

    // Conexao com o banco de dados
     session_start();
    include "Conexao.php";

    $sql = "SELECT * FROM exercicio ORDER BY RAND() LIMIT 1";
    sleep(3);

    $result = mysqli_query($conexao,$sql);
        $exercicio = mysqli_fetch_array($result);
        // Atribui o código HTML para montar uma tabela
        $tabela = '<div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="container">
                        <div class="card-panel z-depth-5 white">
                            <div class="card-panel z-depth-5">
                            <div class="card-image">
                                <img src="Imgs/'.$exercicio["imagem"].'">
                          </div>
                                <h3 class="center">'.$exercicio["descricao"].'</h3>                            
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>';

        $return = "$tabela";

    echo $return;
?>
