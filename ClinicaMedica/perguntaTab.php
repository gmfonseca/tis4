<?php

// Verifica se existe a variável txtnome

    // Conexao com o banco de dados
     session_start();
    include "Conexao.php";

    $sql = "SELECT * FROM pergunta ORDER BY RAND() LIMIT 1";
    sleep(3);

    $result = mysqli_query($conexao,$sql);
        $pergunta = mysqli_fetch_array($result);
        $id_pergunta = $pergunta["codigoPergunta"];
        $sql_resposta_certa = mysqli_query($conexao, "SELECT * FROM respostacerta WHERE cod_pergunta='$id_pergunta'");
        $sl_certa = mysqli_fetch_array($sql_resposta_certa);
        $sql_resposta_errada = mysqli_query($conexao, "SELECT * FROM respostaerrada WHERE cod_pergunta='$id_pergunta' AND descricao <> ''");
        // Atribui o código HTML para montar uma tabela
        $tabela = '
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="container">
                        <div class="card-panel z-depth-5 white">
                            <div class="card-panel z-depth-5">
                                <h3 class="center">'.$pergunta["descricao"].'</h3>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="collection z-depth-3">
                                    <a href="#!" class="collection-item muda-cor waves-effect waves-light" onclick="mudaCorCerto(this), contaAcerto(), contaQuestoes()"> '.$sl_certa["descricao"].'</a>';

        $return = "$tabela";

        // Captura os dados da consulta e inseri na tabela HTML
     while($sl_errada = mysqli_fetch_array($sql_resposta_errada)){
        $id_errada = $sl_errada["codigoErrado"];
        $sql_resp_errada = mysqli_query($conexao, "SELECT * FROM respostaerrada WHERE codigoErrado='$id_errada'");
        $return.='<a href="#!" class="collection-item muda-cor waves-effect waves-light" onclick="mudaCorErrado(this), contaErrado(), contaQuestoes()">'.$sl_errada["descricao"].' </a>';
    }
    echo $return.='</div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
  ';
?>