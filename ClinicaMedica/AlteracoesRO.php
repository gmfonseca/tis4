<!DOCTYPE html>
<html>
    <head>  

        <title> Clinica Médica - Alterações RO </title>

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
                    <h4 class="container white-text"> Alterações da Respiração Oral </h4>
                    <br><br>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col s8 offset-s2">
                        <img class="responsive-img" src="Img_Prog/AlteracoesRO.png">
                    </div>

                </div>
                <div class="row">
                    <br>

                    <div class="col s12 m12 l12">
                        <h4 class="corVerdeTexto"> Alterações na Face </h4>
                        <p class="topicos"> 
                            O respirador oral apresenta desenvolvimento assimétrico dos músculos, ossos do nariz, lábios e bochechas, provocando efeitos na face: o nariz fica estreito e curto (por falta de uso), bochechas pálidas e baixas, lábio inferior curto, mandíbula posicionada para trás e pouco desenvolvida. Frequentemente, observamos que a criança que respira pela boca apresenta um rosto mais triste e cansado, principalmente pela presença de olheiras ao redor dos olhos.                 
                        </p>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> Alterações Posturais </h4>
                        <p class="topicos"> 
                            Ao respirar pela boca a postura corporal fica seriamente comprometida, pois a criança realiza um movimento de protrusão de cabeça para alargar a dimensão faríngea e entrar mais ar, os ombros são curvados para dentro  tornando  o peito mais afundado; os músculos abdominais ficam flácidos e associado a ingestão de ar causam distensão abdominal;  Para compensar esta alteração da postura da cabeça e da cintura escapular há uma acentuação da lordose lombar,os braços  ficam posicionados para trás e os membros inferiores tendem a ficar mais estendidos e há a tendência do pé ficar mais plano.   
                        </p>
                        <p class="topicos"> 
                            Para equilibrar o corpo que tende a ir para frente e para baixo, o respirador oral faz compensações posturais que afetam o equilíbrio do corpo, causando tropeços e quedas. Todas essas alterações são mecanismos de compensação e adaptação, sendo contínuas e cumulativas. Toda essa alteração muscular faz com que a respiração seja rápida e curta, onde a criança apresenta um cansaço constante a qualquer tipo de brincadeiras ou atividades físicas.  
                        </p>
                    </div>
                    <div class="col s12 m6 l6" style=" font-weight: 500;">
                        <img class="responsive-img" src="Img_Prog/AlteracoesPosturais.PNG" style="height: 419px; width: 396px;"><br>
                        Observem nas figuras acima, como a cabeça das crianças são deslocadas para frente. <br>
                        Preste atenção nos ombros e na barriga.
                        Para a criança ter um bom equilíbrio , as alterações que começam na  posição da cabeça desencadeiam compensações em todo o corpo.
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col s12 m6 l6">
                        <img class="responsive-img" src="Img_Prog/RespiracaoOral.PNG" style="height: 419px; width: 396px;">
                    </div>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> Alterações Bucais </h4>
                        <p class="topicos"> 
                            A criança que respira de forma predominantemente oral vive de boca entreaberta. Está sujeita a alterações de cor e volume da gengiva provocadas pelo ressecamento da boca. Na maioria das vezes esse indivíduo chega na fase adulta, apresentando uma má oclusão, classe II - queixo para trás, mais propenso a apresentar alterações funcionais envolvendo a articulação Temporo - Mandibular (ATM).               
                        </p>
                        <p class="topicos"> 
                            Dependendo da idade, a criança já sofreu alterações significativas na arcada e na face:
                        </p> 
                        <ul class="collection"  >
                            <li class="collection-item">Estreitamento da arcada dentária superior (em forma de "V") </li>
                            <li class="collection-item">Céu da boca alto e estreito (palato ogival) </li>
                            <li class="collection-item">Deficiência no crescimento lateral e Protusão da maxila (deslocamento para frente )</li>
                            <li class="collection-item">A língua passa a ficar mais baixa, junto ao assoalho da boca, em contato apenas com os dentes de baixo.</li>
                            <li class="collection-item">Mordidas cruzadas (quando os dentes de cima encaixam por dentro e os de baixo por fora) que podem ser uni ou bilaterais</li>
                            <li class="collection-item">Mordidas abertas (quando os dentes da frente não se tocam, ficando um espaço entre eles)</li>
                            <li class="collection-item">Apinhamentos dentários (pela falta de espaço os dentes ficam amontoados)</li>
                            <li class="collection-item">Retrusões mandibulares (falta de crescimento da mandíbula, o osso onde ficam os dentes de baixo, deixando um espaço horizontal grande entre os dentes anteriores de cima e os de baixo).</li>
                        </ul>

                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col s12 m12 l12">
                        <h4 class="corVerdeTexto"> Alterações comportamentais </h4>
                        <p class="topicos"> 
                            Geralmente são crianças inquietas, impacientes, ansiosas, medrosas e impulsivas e apresentam uma irritação constante. À noite quase nunca querem ir para cama, apesar de estarem dormindo em frente da televisão. A respiração exerce forte influência sobre a concentração e os processos de aprendizagem.As crianças que respiram pela boca geralmente apresentam difculdades de atenção e concentração, baixo rendimento escolar e distúrbios na oxigenação do organismo.
                            Acordam com a boca seca. Roncam, porque o ar que entra pela boca faz vibrar os músculos da garganta, gerando o barulho do ronco.
                        </p>
                    </div>
                    
                </div>

                <div class="row">
                    <br>
                    <div class="col s12 m12 l12">
                        <h4 class="corVerdeTexto">Alterações das Funções Orais: Mastigação</h4>
                        <p class="topicos"> 
                            A mastigação pode se tornar ineficiente, pois a criança precisa respirar e mastigar ao mesmo tempo, levando-a a mastigar com a boca aberta. 
                            Babam, porque a boca fica aberta; 
                            Têm dificuldades para sentir o gosto dos alimentos, porque o nariz também auxilia na gustação; 
                            Têm dificuldades para engolir, porque a língua fica fraca; 
                            Geralmente grande quantidade de alimento é levada à boca e, pela própria dificuldade de mastigar, a criança pode engolir o alimento praticamente inteiro, podendo apresentar problemas digestivos e engasgos. 
                            Consequentemente essa criança alimenta-se mal e pouco. 
                            Apresenta Lentidão no aparelho digestivo e Desordens intestinais. 
                            Ainda assim, podem ocorrer mudanças significativas no peso, levando ao emagrecimento ( se não consegue mastigar conjuntamente com a respiração comendo pouco) ou obesidade ( pela predisposição à alimentação de alimentos moles, e consequentemente ricos em carboidratos)

                        </p>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col s12 m12 l12">
                        <h4 class="corVerdeTexto"> Alterações das Funções Orais: Fala </h4>
                        <p class="topicos"> 
                            Têm dificuldades para coordenar a respiração com a fala, A criança também poderá apresentar problemas na fala, ou seja, como a língua se encontra flácida e mais para a frente, alguns sons da fala podem se apresentar com distorções, como, por exemplo, ao emitir uma palavra com o som s e z (sala, sapato, zelador, casa, etc.), pode ainda  trocar alguns fonemas como "te", "de" e outros. A língua tende a ficar entre os dentes, o que dificulta a saída do ar e distorce o som. Verificamos com frequência o excesso de saliva durante a fala, ou melhor, algumas pessoas podem falar cuspindo, o que prejudica a comunicação e traz rejeição por parte de quem está próximo ao falante. Ao ouvir um respirador bucal, temos a impressão de que ele está sempre resfriado ou que sua voz está saindo pelo nariz. Esta modificação na voz pode ocorrer porque o nariz pode estar frequentemente entupido. Também não é incomum encontrarmos voz rouca. Isto se justifica pelas crises alérgicas frequentes que acabam irritando todo o trato respiratório e, consequentemente, podem prejudicar a laringe (região localizada na garganta que possui as cordas vocais que produzem o som).
                        </p>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> Outros Problemas </h4>

                        <ul class="collection"  >
                            <li class="collection-item">Resfriados constantes </li>
                            <li class="collection-item">Diminuição da audição </li>
                            <li class="collection-item">Mau hálito</li>
                            <li class="collection-item">Maior incidência de cárie</li>
                            <li class="collection-item">Anemia </li>
                            <li class="collection-item">Dores de cabeça </li>
                            <li class="collection-item">Sede constante </li>
                            <li class="collection-item">Suga Polegar ou rói unha </li>
                            <li class="collection-item">Enurese noturna  </li>

                        </ul>

                    </div>
                    <div class="col s12 m6 l6">
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