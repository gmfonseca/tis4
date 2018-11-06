<!DOCTYPE html>
<html>
    <head>  

        <title> Clinica Médica - Tratamento </title>

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

                <div class="col s12 offset-s2">
                    <br>
                    <h4 class="white-text"> Tratamento </h4>
                    <br>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col s8 offset-s2">
                        <p class="topicos"> 
                            O tratamento para a respiração oral e suas consequências envolve vários profissionais, dentre eles: médico otorrinolaringologista, pediatra e alergista, ortodontista, fisioterapeuta e fonoaudiólogo.                
                        </p>
                    </div>

                </div>
                <div class="row">
                    <br>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> Como se baseia o tratamento da criança da respiração oral? </h4>
                        <p class="topicos"> 
                            O tratamento depende da causa da respiração oral. Normalmente o pediatra e o otorrinolaringologista serão os dois profissionais que primeiramente avaliarão as crianças.                 
                        </p>
                    </div>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> Quando a criança deve ser encaminhada ao Fisioterapeuta? </h4>
                        <p class="topicos"> 
                            A criança respiradora oral só deve ser encaminhada ao Fisioterapeuta depois de ser tratada e principalmente depois da resolução da obstrução mecânica, ou seja ressecção das tonsilas faríngeas, amigdalianas e palatinas.  
                        </p>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> Quando a criança deve ser encaminhada ao fonoaudiólogo? </h4>
                        <p class="topicos"> 
                            Logo que a criança inicie a fase de balbucio, a avaliação fonoaudiológica já pode ser feita.              
                        </p>
                    </div>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> Quando a criança deve ser encaminhada ao Ortodontista? </h4>
                        <p class="topicos"> 
                            Após a descida da primeira dentição a criança já deve ser avaliada pelo dentista.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col s8 offset-s2">
                        <h4 class="corVerdeTexto"> O tratamento da respiração oral é só cirúrgico? </h4>
                        <p class="topicos"> 
                            Não. O otorrinolaringologista é o profissional que deve avaliar a criança para definir qual o melhor tratamento. Normalmente as crianças usam medicações antialérgicas quando tem a rinite associada e medicações tópicas nas fossas nasais para controlar a obstrução que pode ser reversível. Caso a obstrução ocupe mais do que 70% da luz do trajeto respiratório normalmente o tratamento é cirúrgico.
                        </p>
                    </div>
                </div>

                <br><br>             
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