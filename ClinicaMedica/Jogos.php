<?php
    include 'Conexao.php';
?>

<!DOCTYPE html>
  <html>
    <head>  
      
        <title> Clinica Médica </title>
        
        <!--Let browser know website is optimized for mobile-->
        <meta http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!--Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS-->
        <link rel="stylesheet" href="css/materialize.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kalam|Nunito|Patrick+Hand|Roboto+Mono|Raleway" rel="stylesheet">
      
        <!-- AJAX -->
        
    </head>
    
    <script>
        var cont = 0;
        function mudaCorCerto(btn_certo){
            btn_certo.style.background = "#36bc27";
            contaAcerto();
            getDados();
        }
        
        function contaAcerto(){
            cont = cont+1;
        }
        
        function getAcertos(){
            return cont;
        }
        
        function mudaCorErrado(btn_errado){
           btn_errado.style.background = "red";
            getDados();
        }

        

    </script>
    
    <style>
        
        /* Borda arredondada card-painel*/
        .card-panel{
            border-radius: 15px;
        }
        
        /* Borda arredondada respostas collection */
        .collection{
            border-radius: 10px;
        }
        
        /* Fonte do título da pergunta */
        h3{
            font-family: 'Nunito';
        }
        
        /* Propriedades das respostas */
        .collection-item{
            font-size: 30px;
            font-family: 'Nunito';
            color: #424242 !important;
        }
        
        /* Muda cor ao passar o mouse */
        .muda-cor:hover{
            background: #1e88e5 !important;
            color: white !important;
        }  
        
        p{
            font-family: 'Nunito';
            font-size: 30px;
        }

    </style>

    <body onload="getDados();" class="grey darken-1">
 <script type="text/javascript" src="js/ajax.js"></script>
        <br><br><br>
<div id="resultado"></div>
      <!--  <php
        while($sl = mysqli_fetch_array($sql_perguntas)){ 
            $id_pergunta = $sl["codigoPergunta"];
            $sql_resposta_certa = mysqli_query($conexao, "SELECT * FROM respostacerta WHERE cod_pergunta='$id_pergunta'");
            $sl_certa = mysqli_fetch_array($sql_resposta_certa);
            $sql_resposta_errada = mysqli_query($conexao, "SELECT * FROM respostaerrada WHERE cod_pergunta='$id_pergunta'");

        ?>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="container">
                        <div class="card-panel z-depth-5 white">
                            <div class="card-panel z-depth-5">
                                <h3 class="center"> <php echo $sl["descricao"] ?> </h3>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="collection z-depth-3">
                                    <a href="#!" class="collection-item muda-cor waves-effect waves-light" onclick="mudaCorCerto(this)" > <php echo $sl_certa["descricao"]?> </a>
                                    <php 
                                        while($sl_errada = mysqli_fetch_array($sql_resposta_errada)){
                                            $id_errada = $sl_errada["codigoErrado"];
                                            $sql_resp_errada = mysqli_query($conexao, "SELECT * FROM respostaerrada WHERE codigoErrado='$id_errada'");
                                    ?>
                                    <a href="#!" class="collection-item muda-cor waves-effect waves-light" onclick="mudaCorErrado(this)"> <php echo $sl_errada["descricao"] ?> </a>
                                    <php } ?>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <php } ?>-->
        
        
        
        
                <!-- Modal Login -->
        <div class="modal modal-fixed-footer" id="Login">
            <div class="modal-content">
                <br>
                <h4 class="center ralewayFont"> <u>Bem-Vindo ao Jogo de Questionário dos Adultos!!!</u> </h4>
                <br>
                <p> - Nesse questionario você responderá diversas perguntas sobre respiração oral.</p>
                <p> - Para jogar você deve clicar em uma das respostas, então ela aparecerá na cor <b style="color: #36bc27;">verde</b> caso você acerte na cor <b style="color: red;">vermelha</b> caso você erre. </p>
                <p> - Você pode encerrar o questionário no momento que você quiser. </p>
                <p> - Ao encerrar o questionário, você poderá ver sua pontuação. </p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close btn-flat"> <b>Fechar Instruções</b> </a>
            </div>
        </div>
        
        <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--Materialize JS-->
        <script src="js/materialize.min.js"></script>
        
     <!-- Modals -->
        <script>
         $(document).ready(function(){
            $('#Login').modal();
            $('#Login').modal('open'); 
         });
        </script>
        
    </body>
  </html>