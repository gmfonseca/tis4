<!DOCTYPE html>
  <html>
    <head>
        
       <title> Clinica Médica - Sobre Nós </title>
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

        p{
            font-size: 1.2em;
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
                    <h4 class="white-text"> Curiosidades </h4>
                    <br>
                </div>
            </div>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12 center">
                        <img class="responsive-img" src="Img_Prog/dia_respiracaooral.png">
                    </div>
                    <div class="col s12 m12 l12 ">
                        <h4 class="corVerdeTexto center"> O dia de Atenção à Respiração Oral</h4>
                        <p class="topicos"> 
                        O Departamento de Motricidade Orofacial da Sociedade Brasileira de Fonoaudiologia 
                        (SBFa) instituiu o dia 14 de agosto como o Dia de Atenção à Respiração Oral. Este é 
                        o primeiro ano de comemoração e de lançamento da campanha ‘Como você respira?’. <br><br>

                        A primeira edição da campanha tem como objetivo promover a conscientização
                        da população sobre a Respiração. No dia 14 de agosto serão desenvolvidas,
                        junto à comunidade em todo território nacional, ações voltadas à promoção e
                        educação para a saúde com foco na respiração. <br><br>
                                                
                        De acordo com informações da SBFa, a celebração do “Dia de Atenção à
                        Respiração Oral” representa uma oportunidade de disseminar conhecimento,
                        orientar a população, promover ações de saúde e auxiliar no adequado
                        encaminhamento de problemas relacionados às alterações da Respiração. <br><br>

                        O Departamento de Motricidade Orofacial da SBFa disponibiliza materiais para
                        a ação, incluindo um folder no qual consta um questionário subjetivo e
                        específico sobre problemas relacionados às características e sintomas da
                        Respiração Oral. São 12 perguntas por meio das quais os participantes podem
                        realizar a auto-avaliação da respiração. Após a aplicação do questionário pelo
                        próprio indivíduo, com o apoio de profissionais, docentes e/ou acadêmicos de
                        Fonoaudiologia, se forem identificadas alterações respiratórias, poderão ser
                        realizados encaminhamentos para o Serviço de Saúde da região. <br><br>                  
                        </p>
                    </div>
                </div>          
            </div>
        <div class="s2" style="background-color: rgb(145, 85, 167); margin-top: 5em">
            <br><br>
            <div class="container white-text">
                <h1 class="center">Você Sabia?</h1>
                <br>
                <ul>
                    <li>
                        <p>• As crianças preferem comer alimentos macios e moles e gostam de beber líquidos para ajudar na a deglutir devido a dificuldade de mastigação. <br> <br></p>
                    </li>
                    <li>
                        <p>• Os lábios são mantidos abertos pra ajudar a respirar durante a mastigação. <br> <br></p>
                    </li>
                    <li>
                        <p>• As crianças tem uma tendencia em colocar a cabeça para frente e realizar a protusão cervicalou seja, flexionam a parte da coluna cervical baixa e hiperextendem a coluna cervical alta. <br> <br></p>
                    </li>
                    <li>
                        <p>• As crianças podem ter dificuldade na fala devido a hipomobilidade da lingua e órgão vocais. <br> <br></p>
                    </li>
                    <li>
                        <p>• O aleitamento materno previne a sindrome, pois permite o incentivo ao desenvolvimento da musculatura orofacial e favorecimento de fluxo aéreo pelo nariz. <br> <br></p>
                    </li>
                    <li>
                        <p>• O governo incentiva os programas de aleitamento que são preventivos ao desenvolvimento da Sindrome da Respiração oral. Além da amamentação, a conscientização em relação aos hábitos orais (uso de chupetas e mamadeiras inadequadas, sucção ), à alimentação (consistência dos alimentos) e à higiene ambiental , o governo tem programas de aleitamento tbm , todos são preventivos. <br> <br></p>
                    </li>
                </ul>
            </div>
            <br><br>
        </div>
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