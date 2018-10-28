<!DOCTYPE html>
<html>
    <head>
        
       <title> Clinica Médica - Convênios </title>
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
                    require_once('navbar.php');
                ?>
                
                <div class="col s12">
                    <br>
                    <h4 class="white-text"> Nossos convênios </h4>
                    <br>
                </div>
            </div>
            <br><br>
            
            <div class="container">
                <div class="row">
                    <h4 class="corVerdeTexto center"> Planos de saúde que atendemos: </h4>
                </div>
                <div class="row">
                    <div class="col s6 m2 l2 offset-l1 offset-m1">
                        <img src="Img_Prog/clinimed.png" style="height: 50px; width: 132px;">
                    </div>
                    <div class="col s6 m2 l2">
                        <img src="Img_Prog/uniplan.png" style="height: 50px; width: 132px;">
                    </div>
                    <div class="col s6 m2 l2">
                        <img src="Img_Prog/lifeplan.png" style="height: 50px; width: 132px;">
                    </div>
                    <div class="col s6 m2 l2">
                        <img src="Img_Prog/brsaude.png" style="height: 50px; width: 132px;">
                    </div>
                    <div class="col s6 m2 l2">
                        <img src="Img_Prog/multiplano.png" style="height: 50px; width: 132px;">
                    </div>
                </div>
                <br>
                <div class="row">
                    <p class="topicos center"> Você não é credenciado por nenhum dos planos acima? Entre em <a href="#"> contato </a> conosco e vamos encontrar uma solução. </p>
                </div>
            </div>
            <br><br><br>
        </div>

        <?php 
            require_once('footer.php');
        ?>


        
        <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--Materialize JS-->
        <script src="js/materialize.min.js"></script>
        
    </body>
  </html>