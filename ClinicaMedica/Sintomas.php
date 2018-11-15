<!DOCTYPE html>
<html>
    <head>  

        <title> Clinica Médica - Sinais e Sintomas </title>

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
                require_once('navbar.php');
                ?>

                <div class="col s12">
                    <br><br>
                    <h4 class="container white-text"> Sinais e Sintomas </h4>
                    <br><br>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <br>

                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto center"> Lista dos sinais e sintomas </h4>
                        <ul class="collection">
                            <li class="collection-item">Obstrução nasal</li>
                            <li class="collection-item">Dor de garganta</li>
                            <li class="collection-item">Ardência ou prurido na faringe</li>
                            <li class="collection-item">Muco espesso aderido à garganta</li>
                            <li class="collection-item">Tosse seca persistente</li>
                            <li class="collection-item">Cefaléia matinal</li>
                            <li class="collection-item">IVAS recorrentes</li>
                            <li class="collection-item">Halitose</li>
                            <li class="collection-item">Enurese noturna</li>
                            <li class="collection-item">Sonolência / Irritabilidade</li>
                            <li class="collection-item">Dificuldade alimentar / aerofagia</li>
                            <li class="collection-item">Mau aproveitamento escolar</li>
                            <li class="collection-item">Facies de respirador oral crônico</li>
                            <li class="collection-item">Aumento de cáries dentárias</li>
                            <li class="collection-item">Deformidades dento-faciais</li>
                            <li class="collection-item">Faringe opaca com metaplasia granulosa e mais vascularizada</li>
                            <li class="collection-item">Pectus scavatum</li>
                            <li class="collection-item">Hábito de dormir com a boca aberta</li>
                            <li class="collection-item">Hábito de roncar</li>
                            <li class="collection-item">Hábito de babar enquanto dorme (pois dorme com a boca aberta)</li>
                            <li class="collection-item">Respiração barulhenta</li>
                            <li class="collection-item">Dificuldade para se alimentar</li>
                            <li class="collection-item">Boca ressecada</li>
                            <li class="collection-item">Arcada dentária superior para frente e arcada inferior para trás</li>
                        </ul>
                        Além disso, crianças maiores que possuem a Síndrome do Respirador Bucal apresentam baixo rendimento escolar, problemas de crescimento, bem como infecções respiratórias frequentes.
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