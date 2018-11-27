<?php

// Verifica se existe a variável txtnome

    // Conexao com o banco de dados
     session_start();
    include "Conexao.php";

    $sql = "SELECT * FROM pergunta ORDER BY RAND() LIMIT 1";
    sleep(0.5);

    $result = mysqli_query($conexao,$sql);
        $pergunta = mysqli_fetch_array($result);
        $id_pergunta = $pergunta["codigoPergunta"];
        $sql_resposta_certa = mysqli_query($conexao, "SELECT * FROM respostacerta WHERE cod_pergunta='$id_pergunta'");
        $sl_certa = mysqli_fetch_array($sql_resposta_certa);
        $sql_resposta_errada = mysqli_query($conexao, "SELECT * FROM respostaerrada WHERE cod_pergunta='$id_pergunta' AND descricao <> ''");
        $sl_errada = mysqli_fetch_array($sql_resposta_errada);
        // Atribui o código HTML para montar uma tabela
        $tabela = '<div class="collection">';
        $return = "$tabela";
        if($sl_certa["descricao"]=="Sim"){
            $return.='<a href="#!" class="collection-item muda-cor waves-effect waves-light" onclick="mudaCorCerto(this), contaAcerto()"> '.$sl_certa["descricao"].'</a>';

                // Captura os dados da consulta e inseri na tabela HTML
            $return.='<a href="#!" class="collection-item muda-cor waves-effect waves-light" onclick="mudaCorErrado(this), contaErrado()">'.$sl_errada["descricao"].' </a>';
        }else{
            // Captura os dados da consulta e inseri na tabela HTML
            $return.='<a href="#!" class="collection-item muda-cor waves-effect waves-light" onclick="mudaCorErrado(this), contaErrado()">'.$sl_errada["descricao"].' </a>';

            $return.='<a href="#!" class="collection-item muda-cor waves-effect waves-light" onclick="mudaCorCerto(this), contaAcerto()"> '.$sl_certa["descricao"].'</a>';
        }
    
    echo $return.='</div>';
?>