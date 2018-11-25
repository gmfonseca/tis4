<?php
require_once('navbar.php');
?>

<!DOCTYPE html>
<html>
    <head>  

        <title> Clinica Médica </title>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS-->
        <link rel="stylesheet" href="css/materialize.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">

        <style>
            #locais{
                color: white;
                margin-bottom: 10%;
            }
            #saibaMais{
                background-color: #81c784;
                margin-top: 5%;
            }

        </style>

        <script>

            var count = 1;

            function mudaPergunta(Antid){
                if(count <=6){
                    var prox = Antid+1;
                    setTimeout(function(){document.getElementById(Antid).hidden = true; }, 1000); 
                    setTimeout(function(){document.getElementById(prox).hidden = false; }, 1000); 
                    count++;}
                else if(count > 6){
                    for(var i=1; i<12; i++){
                        document.getElementById(i).hidden=true;
                    }
                    document.getElementById('contato').hidden=false;                   
                }
            }

            function trataNao(Antid){                
                var prox = Antid+1;
                setTimeout(function(){document.getElementById(Antid).hidden = true; }, 1000); 
                setTimeout(function(){document.getElementById(prox).hidden = false; }, 1000); 
                if(Antid == 12 && count<6){
                    document.getElementById('noproblem').hidden=false;
                }
            }



        </script>

    </head>

    <body class="grey lighten-3">

        <!-- Nav-Bar -->
        <div  style="background-color: white">

            <!-- Carousel Structure -->
            <div class="carousel carousel-slider s12">
                <!-- Itens Carousel -->
                <a class="carousel-item" href="#one"><img class="responsive-img" src="Img_Prog/respiradorOral.jpg"></a>
                <a class="carousel-item" href="#two"><img class="responsive-img" src="Img_Prog/dadoETabuleiro.jpg"></a>
                <a class="carousel-item" href="#three"><img class="responsive-img" src="Img_Prog/curiosidade.jpg"></a>

            </div> 

            <br><br>

            <!-- Cards Structure -->
            <div class="row" style="background-color: white  ">
                <!-- Cards 1 -->
                <div class="col s12 m4 l2 offset-l3">
                    <div id="card1" class="card">
                        <div class="card-content white-text">
                            <span class="card-title"> Sinais e sintomas </span>
                            <p>Clique em saiba mais para mais informações sobre Sinais e Sintomas.</p>
                        </div>
                        <div class="card-action">
                            <a href="Sintomas.php" class="white-text"> Saiba mais</a>
                        </div>
                    </div>
                </div>

                <!-- Cards 2-->
                <div class="col s12 m4 l2">
                    <div  id="card2" class="card">
                        <div class="card-content white-text">
                            <span class="card-title"> Alterações RO </span>
                            <p>Clique em saiba mais para mais informações sobre as Alterações RO.</p>
                        </div>
                        <div class="card-action">
                            <a href="AlteracoesRO.php" class="white-text"> Saiba mais </a>
                        </div>
                    </div>
                </div> 

                <!-- Cards 3 -->
                <div class="col s12 m4 l2">
                    <div id="card3" class="card">
                        <div class="card-content white-text">
                            <span id="prevalencia" class="card-title"> Prevalência e causas </span>
                            <p>Clique em saiba mais para mais informações sobre as Prevalências.</p>
                        </div>
                        <div class="card-action">
                            <a href="Prevalencia.php" class="white-text"> Saiba mais </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row center" style="background-color: #a5d6a7  ;">
                <br><br>
                <div class="col s6">
                    <h4 id="locais"> > Locais de atendimento </h4>
                </div>
                <div class="col s6">
                    <a id="saibaMais" href="locais-atendimento.php" class="waves-effect waves-light btn">Saiba Mais</a>
                </div>
            </div>
            <br>


            <br>
        </div>



        <div class="row center" style="background-color: white;">
            <br><br>
            <h4> FAÇA AUTO-EXAME </h4>
            <p>Responda as perguntas e verifique se você é um Respirador Oral ou tem tendência a tê la!</p>
            <p id="1">
                Você tem dificuldade de respirar pelo nariz?
                <label>
                    <input class="with-gap" name="group1" type="radio" value="sim" onClick="mudaPergunta(1)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group1" type="radio" value="nao" onClick="trataNao(1)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="2" hidden="true">
                Você respira pela boca?
                <label>
                    <input class="with-gap" name="group2" type="radio"  onclick="mudaPergunta(2)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group2" type="radio" onClick="trataNao(2)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="3" hidden="true">
                Você tem resfriados frequentemente?
                <label>
                    <input class="with-gap" name="group3" type="radio"  onclick="mudaPergunta(3)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group3" type="radio" onClick="trataNao(3)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="4" hidden="true">
                Você tem coceira no nariz?
                <label>
                    <input class="with-gap" name="group4" type="radio"  onclick="mudaPergunta(4)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group4" type="radio" onClick="trataNao(4)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="5" hidden="true">
                Você sente o nariz entupido?
                <label>
                    <input class="with-gap" name="group5" type="radio"  onclick="mudaPergunta(5)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group5" type="radio" onClick="trataNao(5)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="6" hidden="true">
                Você espirra várias vezes em seguida?
                <label>
                    <input class="with-gap" name="group6" type="radio"  onclick="mudaPergunta(6)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group6" type="radio" onClick="trataNao(6)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="7" hidden="true">
                Você apresenta secreção no nariz frequentemente?
                <label>
                    <input class="with-gap" name="group7" type="radio"  onclick="mudaPergunta(7)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group7" type="radio" onClick="trataNao(7)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="8" hidden="true">
                Você ronca?
                <label>
                    <input class="with-gap" name="group8" type="radio"  onclick="mudaPergunta(8)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group8" type="radio" onClick="trataNao(8)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="9" hidden="true">
                Você tem algum problema com sono?
                <label>
                    <input class="with-gap" name="group9" type="radio"  onclick="mudaPergunta(9)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group9" type="radio" onClick="trataNao(9)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="10" hidden="true">
                Você dorme com a boca aberta?
                <label>
                    <input class="with-gap" name="group9" type="radio"  onclick="mudaPergunta(10)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group9" type="radio" onClick="trataNao(10)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="11" hidden="true">
                Você sente cansaço durante o dia?
                <label>
                    <input class="with-gap" name="group10" type="radio"  onclick="mudaPergunta(11)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group10" type="radio" onClick="trataNao(11)"/>
                    <span>Não</span>
                </label>
            </p>

            <p id="12" hidden="true">
                Você acorda com a boca seca?
                <label>
                    <input class="with-gap" name="group11" type="radio"  onclick="mudaPergunta(12)"/>
                    <span>Sim</span>
                </label>
                <label>
                    <input class="with-gap" name="group11" type="radio" onClick="trataNao(12)"/>
                    <span>Não</span>
                </label>
            </p>


            <div id="contato" class="row" hidden="true">
                <div class="col s4 m4 l4 offset-24 offset-m4 offset-l4">
                    <div class="card" style="background-color: #a5d6a7;">
                        <div class="card-content white-text">
                            <span class="card-title"> Atenção! </span>
                            <p> Você possui tendências a ter respiração oral, clique no botão a baixo para entrar em contato conosco! </p>
                        </div>
                        <div class="card-action">
                            <a href="fale-conosco.php" class="waves-effect waves-light btn"> Entre em Contato </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="noproblem" class="row" hidden="true">
                <div class="col s4 m4 l4 offset-24 offset-m4 offset-l4">
                    <div class="card" style="background-color: #a5d6a7;">
                        <div class="card-content white-text">
                            <span class="card-title"> Auto-Exame Concluído! </span>
                            <p> Você não possui tendência a ter respiração oral! </p>
                        </div>
                        <div class="card-action">
                            <a href="fale-conosco.php" class="waves-effect waves-light btn"> Entre em Contato Para mais Informações </a>
                        </div>
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

        <!-- Activate Carousel -->
        <script>
            $('.carousel.carousel-slider').carousel({
                indicators: true,
                fullWidth: true
            }, setTimeout(autoplay, 4000));
            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 4000);
            }
        </script>
    </body>
</html>