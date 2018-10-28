<?php
    include 'Conexao.php';
?>

<!DOCTYPE html>
  <html>
    <head>  
      
        <title> Clinica Médica - Jogo </title>
        
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
        var contCerto = 0;
        var contErrado = 0;
        var numQuestoes = 0;
        
        var imagesErro = [];
        imagesErro[0] = 2;
        imagesErro[1] = 3;
        imagesErro[2] = 4;
        imagesErro[3] = 5;
        
        var imagensCerta = [];
        imagensCerta[0] = 1;
        imagensCerta[1] = 6;
        
        function mudaCorCerto(btn_certo){
            btn_certo.style.background = "#36bc27";
        }

        function mudaCorErrado(btn_errado){
           btn_errado.style.background = "red";
        }
       
       function contaQuestoes(){
           numQuestoes = numQuestoes+1;
       }
       
        function contaAcerto(){
            contCerto = contCerto+1; 

            var sorte = Math.floor((Math.random() * 2) + 1);

            switch(sorte){
                case 1:
                    document.getElementById('1').hidden = false;
                    setTimeout(function(){document.getElementById('1').hidden = true; }, 3000);   
                    break;
                case 6:
                    document.getElementById('6').hidden = false;
                    setTimeout(function(){document.getElementById('6').hidden = true; }, 3000);   
                    break;
                default:
                    break;
            }            
            return getDados();
        }

        function contaErrado(){
            contErrado = contErrado+1;
  
            var sorte = Math.floor((Math.random() * 4) + 1);

            switch(sorte){
                case 2:
                    document.getElementById('2').hidden = false;
                    setTimeout(function(){document.getElementById('2').hidden = true; }, 3000);   
                    break;
                case 3:
                    document.getElementById('3').hidden = false;
                    setTimeout(function(){document.getElementById('3').hidden = true; }, 3000);   
                    break;
                case 4:
                    document.getElementById('4').hidden = false;
                    setTimeout(function(){document.getElementById('4').hidden = true; }, 3000);   
                    break;
                case 5:
                    document.getElementById('5').hidden = false;
                    setTimeout(function(){document.getElementById('5').hidden = true; }, 3000);   
                    break;
                default:
                    break;
            }

            return getDados();
        }
        
        function calcEstatistica(){
            if(numQuestoes == 1){
                alert('Você acertou ' + contCerto +' questão, errou ' + contErrado + ' de ' + numQuestoes + ' questão!');
            }else if(contCerto == 1){
                alert('Você acertou ' + contCerto +' questão, errou ' + contErrado + ' de ' + numQuestoes + ' questões!');
            }else{
                alert('Você acertou ' + contCerto +' questões, errou ' + contErrado + ' de ' + numQuestoes + ' questões!');
            }
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
        
        .imagens{
            width: 300px;
            heigh: 400px;
        }

    </style>

    <body onload="getDados();" style="background-color:#aa00ff">
        <script type="text/javascript" src="js/ajax.js"></script>
 
        <br><br><br>
        
        <div clas="rigth">
            <img id="1" src="Img_Prog/tabuleiro/b-happy.png" class="imagens right" hidden="true">
            <img id="2" src="Img_Prog/tabuleiro/b-ops.png" class="imagens right" hidden="true">
            <img id="3" src="Img_Prog/tabuleiro/b-sad.png" class="imagens right" hidden="true">
            <img id="4" src="Img_Prog/tabuleiro/g-ops.png" class="imagens right" hidden="true">
            <img id="5" src="Img_Prog/tabuleiro/g-sad.png" class="imagens right" hidden="true">
            <img id="6" src="Img_Prog/tabuleiro/g-happy.png" class="imagens right" hidden="true">
        </div>
        
        <div id="resultado"></div>
             

        
        <div class="container">
            <div class="row">
                <div class="col s6 m6 l6 offset-s4 offset-m4 offset-l4">
                <a class="waves-effect waves-light btn" href="Definir-Jogo.php"><i class="material-icons left">chevron_left</i> Voltar </a>
                <a class="waves-effect waves-light btn" onClick="calcEstatistica()"><i class="material-icons right">check</i> Finalizar Questionário </a>
                </div>
            </div>
        </div>
        
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