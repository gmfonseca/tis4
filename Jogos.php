<?php
    include 'Conexao.php';
    $sql_perguntas = mysqli_query($conexao,"SELECT * FROM pergunta");
?>

<!DOCTYPE html>
<html>
    <head>  
      
        <title> Clinica Médica </title>
        
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!--Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS-->
        <link rel="stylesheet" href="css/materialize.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kalam|Nunito|Patrick+Hand|Roboto+Mono|Raleway" rel="stylesheet">
      
    </head>
    
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
            background: #36bc27 !important;
            color: white !important;
        }

    </style>

    <body class="grey darken-1">

        <br><br><br>

        <?php
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
                                <h3 class="center"> <?php echo $sl["descricao"] ?> </h3>
                            </div> 
                        </div>                      
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="collection z-depth-3">
                                    <a href="#!" class="center collection-item muda-cor waves-effect waves-light" onclick="mudaCorCerto(this)" > <?php echo $sl_certa["descricao"]?> </a>
                                    <?php 
                                        while($sl_errada = mysqli_fetch_array($sql_resposta_errada)){
                                            $id_errada = $sl_errada["codigoErrado"];
                                            $sql_resp_errada = mysqli_query($conexao, "SELECT * FROM respostaerrada WHERE codigoErrado='$id_errada'");
                                    ?>
                                    <a href="#!" class="collection-item muda-cor waves-effect waves-light" onclick="mudaCorErrado(this)"> <?php echo $sl_errada["descricao"] ?> </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

        
        <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--Materialize JS-->
        <script src="js/materialize.min.js"></script>
        
    </body>
  </html>