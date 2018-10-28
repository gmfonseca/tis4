<!DOCTYPE html>
  <html>
    <head>
        
       <title> Clinica Médica - Contato </title>
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
        
        .corbtn{
            background-color: rgba(145, 85, 167, 1);
        }

    </style>

    <body class="grey lighten-3">

        <div id="god" class="white"> 
            <div id="SobreNos" class="row">

                <?php 
                    require_once('navbar.php');
                ?>
                
                <div class="col s8 offset-s2">
                    <br>
                    <h4 class="white-text center"> Entre em contato </h4>
                    <br>
                </div>
            </div>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6">
                    <h5 class="corVerdeTexto center"> Nossa unidade </h5>
                    <p class=" center"> Av. Bernardino de Campos, 98 <br>
                        São Paulo, SP 12345-678 <br><br>
                        Tel: 011-3456-7890 <br>
                        Fax: 011-3456-7890 <br><br>
                        info@meusite.com   
                    </p>
                </div>
                    <div class="col s12 m6 l6">
                        <form method="POST" enctype='multipart/form-data'>
                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <i class="material-icons prefix"> account_box </i>
                                    <label for="cNome" class="ralewayFont">Nome: </label><input class="active validate" type="text" name="tNome" id="cNome" maxlength="50" placeholder="Seu nome completo" pattern="[A-Za-z\s]+$" required>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <i class="material-icons prefix"> email </i>
                                    <label class="ralewayFont"> E-mail: </label><input class="active validate" type="email" name="tMail" id="cMail" maxlength="30" placeholder="E-mail" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <i class="material-icons prefix"> chat </i>
                                    <label for="cNome" class="ralewayFont"> Assunto: </label><input class="active validate" type="text" name="tNome" id="cNome" maxlength="50" placeholder="Seu nome completo" pattern="[A-Za-z\s]+$" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Textarea</label>
                            </div>

                            <div class="row">
                                <div class="center">
                                    <button class="btn waves-effect waves-light ralewayFont modal-trigger corbtn" type="submit"> Enviar
                                        <i class="material-icons right"> send </i>    
                                    </button>                                
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                    <br><br><br>
                </div>
            </div>
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