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
    <script type="text/javascript">
        function ajuda(){
            aler( document.getElementsByName('group1').value);
        }
    </script>
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
                    <div class="col l6 s6">
                        <h5 id="Atfooter"> Triagem </h5>
                      

                            <p>
                                Você tem dificuldade de respirar pelo nariz?
                                <label>
                                    <input class="with-gap" name="group1" type="radio" value="sim" />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group1" type="radio" value="nao"  />
                                    <span>Não</span>
                                </label>
                            </p>
                            <p>
                                Você respira pela boca?
                                <label>
                                    <input class="with-gap" name="group2" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group2" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>
                            <p>
                                Você tem resfriados frequentemente?
                                <label>
                                    <input class="with-gap" name="group3" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group3" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>
                            <p>
                                Você tem coceira no nariz?
                                <label>
                                    <input class="with-gap" name="group4" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group4" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>

                            <p>
                                Você sente o nariz entupido?
                                <label>
                                    <input class="with-gap" name="group5" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group5" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>

                            <p>
                                Você espirra várias vezes em seguida?
                                <label>
                                    <input class="with-gap" name="group6" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group6" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>

                            <p>
                                Você apresenta secreção no nariz frequentemente?
                                <label>
                                    <input class="with-gap" name="group7" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group7" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>

                            <p>
                                Você ronca?
                                <label>
                                    <input class="with-gap" name="group8" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group8" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>

                            <p>
                                Você tem algum problema com sono?
                                <label>
                                    <input class="with-gap" name="group9" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group9" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>



                            <p>
                                Você dorme com a boca aberta?
                                <label>
                                    <input class="with-gap" name="group9" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group9" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>

                            <p>
                                Você sente cansaço durante o dia?
                                <label>
                                    <input class="with-gap" name="group10" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group10" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>

                            <p>
                                Você acorda com a boca seca?
                                <label>
                                    <input class="with-gap" name="group11" type="radio"  />
                                    <span>Sim</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="group11" type="radio"  />
                                    <span>Não</span>
                                </label>
                            </p>
                            <button class="btn waves-effect waves-light" type="button" onclick="ajuda()">Submit
                                <i class="material-icons right">send</i>
                            </button>

                            
                    </div>
                </div>
                <!--
<div class="row">
<div class="col l6 s6">
<h5 id="Atfooter">Contato</h5>
<p class="grey-text "> Email: pdayrell@gmail.com  </p>
<p class="grey-text "> Telefone:  (31) 3319-4423 / (31) 3319-4424.</p>
<p class="grey-text "> Local: Centro Clínico de Fisioterapia Av. 31 de Março - acesso 8 - prédio 46 - PUC Minas Coração Eucarístico </p>
</div>
</div>
-->
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