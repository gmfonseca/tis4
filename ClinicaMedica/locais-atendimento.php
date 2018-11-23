<!DOCTYPE html>
<html>
    <head>

        <title> Locais de Atendimento - Clinica Médica </title>
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
        #locais{
            font-size: 20px;
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
                    <h4 class="white-text"> LOCAIS DE ATENDIMENTO - BH </h4>
                    <br>
                </div>
            </div>
            <br><br>

            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h4 id="locais" class="corVerdeTexto ">Confira os locais de atendimento da região de Belo Horizonte </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <img class="" src="Img_Prog/ufmg.jpg" style="height: 100px; width: 200px;">
                    </div>
                    <div class="col s12 m6">
                        <p>Hospital São Geraldo - HC UFMG
                        <br/>Endereço: Av. Prof. Alfredo Balena, 190 - Santa Efigênia, Belo Horizonte - MG, 30130-100
                        <br/>Horário: XXXX</p>
                    </div>
                </div>

                <div class="divider "></div><br>

                <div class="row">
                    <div class="col s12 m6 ">
                        <img src="Img_Prog/pucminas.jpg" style="height: 145px; width: 200px;">
                    </div>
                    <div class="col s12 m6">
                        <p>Centro Clínico de Fisioterapia
                            Av. 31 de Março - acesso 8 - prédio 46 - PUC Minas Coração Eucarístico. 

                            <br/>Horário de funcionamento: De segunda a sexta-feira, de 7h às 12h20 e de 13h30 às 18h50.

                            <br/>Informações: (31)3319-4423 / 3319-4424s</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col s12 m6 offset-m6">
                        <p class="topicos center"> Entre em<a href="fale-conosco.php"> contato</a> conosco e vamos encontrar uma solução.</p>
                    </div>
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