<!DOCTYPE html>
<html>

    <head>

        <title> Clinica Médica - Questionário</title>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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

        /* Cor verde do texto "Cuide..." */
        #cuide, #Atfooter{
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

    </style>

    <body class="grey lighten-3">
        <?php 
            require_once('navbar.php')
        ?>

        <!--Formulario do questionario-->
        <div class="container col s12">
            <!---------------------------------- PROBLEMA COM O <h1></h1> NA RESPONSIVIDADE ---------------------------------->
            <h2 class="center-align">Titulo questionário</h2>
            <div class="container" id="questoes">

                <!--Cartao de questao-->
                <div class="cartao">
                    <div class="col s12 m7">
                        <div class="card horizontal">
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Numero pergunta</p>
                                    <p>Pergunta</p>
                                </div>

                                <div class="card-action">
                                    <div class="resposta">
                                        <p>
                                            <label>
                                                <input class="with-gap" name="group1" type="radio" />
                                                <span>Opcao texto</span>
                                            </label>
                                        </p>
                                    </div>

                                    <div class="resposta">
                                        <p>
                                            <label>
                                                <input class="with-gap" name="group1" type="radio" />
                                                <span>Opcao texto</span>
                                            </label>
                                        </p>
                                    </div>

                                    <div class="resposta">
                                        <p>
                                            <label>
                                                <input class="with-gap" name="group1" type="radio" />
                                                <span>Opcao texto</span>
                                            </label>
                                        </p>
                                    </div>

                                    <div class="resposta">
                                        <p>
                                            <label>
                                                <input class="with-gap" name="group1" type="radio" />
                                                <span>Opcao texto</span>
                                            </label>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Fim cartao de questao-->
                <div class="right-align">
                    <a class="waves-effect waves-light btn">Enviar</a>
                </div>
            </div>
            <br>
            <!--Fim container questoes-->
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
