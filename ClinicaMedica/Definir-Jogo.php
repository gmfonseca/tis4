<!DOCTYPE html>
<html>
    <head>  

        <meta charset="utf-8">
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

    </head>

    <style>
        /* Fonte da letra dos <li> */
        li{
            font-family: 'Raleway';
        }

        /* Distancia dos <li> de Especialidades */
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

        /* Distancia do topo do NavBar */
        .lina{
            margin-top: 25px;
        }       

        /* Cor verde do texto "Cuide..." */
        #cuide, #Atfooter{
            color: #0DB26B;
        }

        /*Fonte para esse tipo de tags*/
        p, span, h5,h4, #Atfooter{
            font-family: raleway, sans-serif;
        }

        /*Conteudo da página*/
        #conteudo{
            background-color:#0DB26B;
        }
        a
        .btn{
            background-color:#000000;
            color:#0DB26B;
        }
        .btn:hover{
            background:#FFFFFF;		
            color:#000000;			
        }
        .divisor-line{
            border-color: #eee;
        }
        #adulto{
            border-style: solid;
            border-color: red;
        }

    </style>

    <body style="background-color: rgb(145, 85, 167">
        <?php
        require_once('navbar.php');
        ?>

        <br><br><br>
        <!-- Website Content -->
        <div id="conteudo" style="background-color: rgb(145, 85, 167)">


            <br><br>
            <div class="row" id="linha">
                <div class="center col s12 m6 l4 offset-l2">		
                    <div id="adulto">
                        <img class="responsive-imga" src="Img_Prog/adulto.png" style="height: 161px; width: 140px;">
                        <br>
                        <a href="Jogos.php" class="waves-effect waves-light btn"> ADULTO </a>   
                        <br><br>
                        <span class="col s12 hide-on-med-and-up divisor-line"><br></span>
                    </div>
                </div>

                <div class="center col s12 m6 l4">	
                    <img class="responsive-img" src="Img_Prog/criancas.png" style="height: 161px; width: 161px;">
                    <br>
                    <a href="Infantil.php" class="waves-effect waves-light btn"> INFANTIL </a>    
                    <br><br>
                    <span class="col s12 hide-on-med-and-up divisor-line"><br></span>
                </div>
            </div>   
            <br>			
        </div>



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