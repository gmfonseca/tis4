<!DOCTYPE html>
<html>
    <head>

        <title> Clinica Médica - O Problema</title>
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
                    <h4 class="white-text"> Respirador oral</h4>
                    <br>
                </div>
            </div>
            <br><br>
            <div class="container">
                <!--Texto na direita imagem na esquerda-->
                <div class="row">
                    <div class="col s12 m6 l6">
                        <img class="responsive-img" src="">
                    </div>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> O que caracteriza a respiração oral? </h4>
                        <p class="topicos"> 
                            É  a respiração onde a entrada de ar é predominantemente pela boca.  Pode ser ocasionada por uma semi-obstrução nasal intermitente ou persistente das vias aéreas superiores. Normalmente a respiração é ruidosa e há a presença de roncos e o fluxo respiratório é total ou parcial pela boca. 
                        </p>
                    </div>
                </div>
                <!--Texto na esquerda imagem na direita-->
                <div class="row">
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> A respiração oral só é diagnosticada na infância? 
                        </h4>
                        <p class="topicos"> 
                            A respiração oral inicia na primeira infância e se não for tratada adequadamente pode alcançar a fase adulta. Mães relatam que os filhos roncam demais, ou tem sono agitado e babam no travesseiro. Normalmente as mães percebem que as crianças ficam muito gripadas, tem nariz escorrendo demais  e esta é o primeiro motivo para consultar o pediatra ou o otorrinolaringologista
                        </p>
                    </div>
                    <div class="col s12 m6 l6">
                        <img class="responsive-img" src="">
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m6 l6">
                        <img class="responsive-img" src="">
                    </div>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto">  Quais são os sinais da respiração oral?</h4>
                        <p class="topicos"> 
                            Normalmente a criança dorme de boca aberta, pode apresentar salivação aumentada, halitose, agitação psicomotora a noite ( mexe demais na cama) e frequentemente distúrbios do sono.  Os lábios ficam entreabertos, língua no assoalho bucal, lábio inferior com posição em eversão ( mais virado para fora e mais carnudo), problemas de oclusão dentária, palato atrésico e ogival , flacidez de bochechas e aumento da altura da face. A fala pode ser imprecisa com presença de sigmatismo anterior ou lateral e a voz pode ser alterada pelo ressecamento dos tecidos da laringe que prejudica a vibração das pregas vocais A dificuldade respiratória varia entre formas mais leves de ronco até quadros de apnéia ( pausas respiratórias). As funções fisiológicas da cavidade oral como a mastigação, fonação, fala e deglutição encontram-se geralmente alteradas.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto">  Há classificação para a criança respiradora oral?</h4>
                        <p class="topicos"> 
                            Normalmente a criança que não apresenta obstrução mecânica, ou seja, presença de hipertrofia de tonsilas palatina, amigdaliana e adenoideana e  apresenta a  boca aberta é chamada de respiradora oral funcional.
                            A criança que apresenta a obstrução mecânica é chamada de respiradora oral obstrutiva.
                        </p>
                    </div>
                    <div class="col s12 m6 l6">
                        <img class="responsive-img" src="">
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m6 l6">
                        <img class="responsive-img" src="">
                    </div>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> Quais são as consequências da respiração oral? </h4>
                        <p class="topicos"> 
                            As consequências da respiração oral, muitas vezes podem ser irreversíveis para o crescimento e desenvolvimento da criança como: alterações posturais, craniofaciais, oclusais, auditivas, vocais, articulatórias, nas funções estomatognáticas, dos órgãos fonoarticulatórios, redução de apetite, dificuldades de atenção e concentração, agitação, ansiedade  e dificuldade na aprendizagem, desempenho inferior de habilidades fonológicas  e envelhecimento facial precoce em comparação aos respiradores nasais, destacando-se maior presença de olheiras, rugas abaixo dos olhos, sulco mento-labial, face discretamente alongada na região das bochechas e maior desproporção facial. Além dos problemas de respiração, mastigação, deglutição, postura e tonicidade dos órgãos fonoarticulatórios, os respiradores orais podem apresentar também distúrbio articulatório. A má-oclusão, uma das principais características do respirador oral pode acarretar dificuldades ou desvios de produção fonético/articulatório. Entretanto, existem poucos trabalhos que relatam a ocorrência de distúrbios articulatórios decorrentes a este tipo de respiração. 
                        </p>
                    </div>
                </div>


           
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