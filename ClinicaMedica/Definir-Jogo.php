<!DOCTYPE html>
<html>
    <head>  

        <meta charset="utf-8">
        <title> Clinica Médica - Escolher Jogo </title>

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
            background-color: #b3e5fc;
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

    </style>

    <body  style="background-color:#b3e5fc">

        <!-- Website Content -->
        <div id="conteudo">
            <?php
            require_once('navbar.php');
            ?>

            <br><br><br><br><br>
            <div class="row" id="linha">
                <div class="center col s12 m6 l4 offset-l2">							

                    <i class="large material-icons green-text text-lighten-2">face</i>
                    <br>
                    <a href="Jogos.php" class="waves-effect waves-light btn"> ADULTO </a>   
                    <br><br>
                    <span class="col s12 hide-on-med-and-up divisor-line"><br></span>
                </div>

                <div class="center col s12 m6 l4">	

                    <i class="large material-icons green-text text-lighten-2">child_care</i>
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