  <!DOCTYPE html>
  <html>
    <head>  
        
       <title> Ortopedia </title>
        
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!--Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS-->
        <link rel="stylesheet" href="css/materialize.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      
    </head>
    
    <style>
        /* Fonte da letra dos <li> */
        li{
            font-family: 'Raleway';
        }
        
        /* Distância dos <li> de Especialidades */
        #Especialidades{
            top: 90px !important;
        }
        
        /* Centraliza o NavBar */
        .nav-wrapper ul.center {
           display: block;
           width: auto;
         }

         .nav-wrapper > ul.center li {
           float: none;
           display: inline-block;
         }
         
         /* Distância do topo do NavBar */
         .lina{
            margin-top: 25px;
         }

         /* Cor dos botões do Carousel */
        .carousel .indicators .indicator-item.active {
          background-color: rgb(145, 85, 167);
        }

        /* Posição dos botões do Carousel */
        .caoursel .indicators {
          bottom: 60px;
          z-index: 100;
        }
        
        /*Cards Colors*/
        #card1{
           background-color: rgba(109, 204, 163, 0.9);
        }
        #card2{
            background-color: rgba(13, 178, 107, 0.9);
        }
        #card3{
            background-color: rgba(9, 119, 71, 0.9);
        }
        
        /* Cor verde do texto "Historia..." */
        .corVerdeTexto, #Atfooter{
            color: #0DB26B;
        }
        
        /*Fonte para esse tipo de tags*/
        p, span, h5,h4, #Atfooter{
            font-family: raleway, sans-serif;
        }
        
        .topicos{
            color: #605E5E;
        }
        
        body{
            overflow-x: hidden;
        }
        
        /* Cor background Sobre Nos*/
        #SobreNos{
            background-color: rgba(109, 204, 163, 0.9);
        }

    </style>

    <body class="grey lighten-3">

        <div id="god" class="white"> 
            <div id="SobreNos" class="row">
                <?php 
                    require_once('navbar.php')
                ?>

                <div class="col s8 offset-s2">
                    <br>
                    <h4 class="white-text"> Ortopedia </h4>
                    <br>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col s12 m6 l6">
                        <img class="responsive-img" src="Img_Prog/ortopedia.png" style="height: 419px; width: 396px;">
                    </div>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> A especialidade </h4>
                        <p class="topicos"> 
                            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, 
                            quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. 
                            Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.
                            Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum,
                            e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.                    
                        </p>
                    </div>
                </div>
                <br><br>             
            </div>
            <br><br><br>
        </div>
    
        <?php 
            require_once('footer.php')
        ?>
        
        <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--Materialize JS-->
        <script src="js/materialize.min.js"></script>
        
    </body>
  </html>