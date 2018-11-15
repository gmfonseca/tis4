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

        <script>

        </script>

    </head>

    <body class="grey lighten-3">

        <!-- Nav-Bar -->
        <div  style="background-color: rgb(145, 85, 167);">

            <!-- Carousel Structure -->
            <div class="carousel carousel-slider s12">
                <!-- Itens Carousel -->
                <a class="carousel-item" href="#one"><img class="responsive-img" src="Img_Prog/orientacao.jpg"></a>
                <a class="carousel-item" href="#two"><img class="responsive-img" src="Img_Prog/autoexame.jpg"></a>


            </div> 

            <br><br>

            <!-- Cards Structure -->
            <div class="row" style="background-color: rgb(145, 85, 167);">
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
                            <span class="card-title"> Prevalência </span>
                            <p>Clique em saiba mais para mais informações sobre as Prevalências da respiração oral.</p>
                        </div>
                        <div class="card-action">
                            <a href="Prevalencia.php" class="white-text"> Saiba mais </a>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="hide-on-med-and-up">
                <div class="row"  style="background-color: rgb(145, 85, 167);">
                    <div class="col m6 l8 offset-m3 offset-l4">
                        <h5 class="white-text"> > Especialidades </h5>                 
                    </div> 
                </div>
            </div>
            <br>
        </div>



        <div class="row center" style="background-color: white;">
            <br><br>
            <h4 id="cuide"> Está na dúvida ? </h4>

            <br><br>
            <div class="container" style="background-color: white;">
                <div class="row">
                    <div class="col s12 m12 l12">
                          <i class="large material-icons green-text ">priority_high</i>
                        <h4 class="topicos"> Responda as perguntas e verifique se você possui respiração oral ou tem tendência a tê-la !</h4>
                        <a href="Contato.php" style="color: rgb(145, 85, 167);"> > Responder questionário </a>
         
 
                    </div>
                    <div class="col s12 m4 l4">
                        <img src="Img_Prog/pessoa.png" style="height: 80px; width: 80px;">
                        <h4 class="topicos"> Conheça mais sobre a Clínica Médica </h4>
                        <p class="topicos"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et gravida metus. Integer maximus odio quis diam rhoncus molestie. Nullam eu ipsum ante. Ut dictum pharetra velit vitae finibus.</p>
                        <a href="#" style="color: rgb(145, 85, 167);"> > Saiba mais </a>
                        <br><br>
                        <span class="col s12 hide-on-med-and-up divisor-line"><br></span>
                    </div>
                    <div class="col s12 m4 l4">
                        <img src="Img_Prog/pessoa.png" style="height: 80px; width: 80px;">
                        <h4 class="topicos"> Conheça mais sobre a Clínica Médica </h4>
                        <p class="topicos"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et gravida metus. Integer maximus odio quis diam rhoncus molestie. Nullam eu ipsum ante. Ut dictum pharetra velit vitae finibus.</p>
                        <a href="#" style="color: rgb(145, 85, 167);"> > Saiba mais </a>
                        <br><br>
                        <span class="col s12 hide-on-med-and-up divisor-line"><br></span>
                    </div>
                    <div class="col s12 m4 l4">
                        <img src="Img_Prog/pessoa.png" style="height: 80px; width: 80px;">
                        <h4 class="topicos"> Conheça mais sobre a Clínica Médica </h4>
                        <p class="topicos"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et gravida metus. Integer maximus odio quis diam rhoncus molestie. Nullam eu ipsum ante. Ut dictum pharetra velit vitae finibus.</p>
                        <a href="#" style="color: rgb(145, 85, 167);"> > Saiba mais </a>
                        <br><br>
                        <span class="col s12 hide-on-med-and-up divisor-line"><br></span>
                    </div>
                    <div class="col s12 m4 l4">
                        <img src="Img_Prog/pessoa.png" style="height: 80px; width: 80px;">
                        <h4 class="topicos"> Conheça mais sobre a Clínica Médica </h4>
                        <p class="topicos"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et gravida metus. Integer maximus odio quis diam rhoncus molestie. Nullam eu ipsum ante. Ut dictum pharetra velit vitae finibus.</p>
                        <a href="#" style="color: rgb(145, 85, 167);"> > Saiba mais </a>
                        <br><br>
                        <span class="col s12 hide-on-med-and-up divisor-line"><br></span>
                    </div>
                    <div class="col s12 m4 l4">
                        <img src="Img_Prog/pessoa.png" style="height: 80px; width: 80px;">
                        <h4 class="topicos"> Conheça mais sobre a Clínica Médica </h4>
                        <p class="topicos"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et gravida metus. Integer maximus odio quis diam rhoncus molestie. Nullam eu ipsum ante. Ut dictum pharetra velit vitae finibus.</p>
                        <a href="#" style="color: rgb(145, 85, 167);"> > Saiba mais </a>
                        <br><br>
                        <span class="col s12 hide-on-med-and-up divisor-line"><br></span>
                    </div>
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