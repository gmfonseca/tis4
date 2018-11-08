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
    .title-background{
        background-color: rgba(109, 204, 163, 0.9);
    }

</style>


    <body class="grey lighten-3">

        <div id="god" class="white"> 
            <div class="title-background row">

                <?php 
                require_once('navbar.php');
                ?>

                <div class="col s12">
                    <br><br>
                    <h4 class="container white-text"> Condições associadas à respiração oral na infância  </h4>
                    <br><br>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <br>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto">Síndromes crânio-faciais</h4>
                        <ul class="collection">
                            <li class="collection-item">Síndrome de Crouzon</li>
                            <li class="collection-item">Síndrome de Apert</li>
                            <li class="collection-item">Síndrome de Treacher-Collins</li>
                            <li class="collection-item">Síndrome de Godenhar</li>
                            <li class="collection-item">Síndrome de Pierre Robin</li>
                        </ul>
                    </div>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto">Doenças neurológicas</h4>
                        <ul class="collection">
                            <li class="collection-item">Malformação de Arnold- Chiari</li>
                            <li class="collection-item">Meningomielocele</li>
                            <li class="collection-item">Paralisia cerebral</li>
                            <li class="collection-item">Distrofia muscular de Duchene</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <br>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto">Condições acompanhadas de tônus muscular anormal</h4>
                        <ul class="collection">
                            <li class="collection-item">Síndrome de Down</li>
                            <li class="collection-item">Síndrome de Prader-Willi</li>
                            <li class="collection-item">Hipotireoidismo</li>
                        </ul>
                    </div>
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto">Condições que se associam com redução da patência das vias aéreas superiores </h4>
                        <ul class="collection">
                            <li class="collection-item">Rinite alérgica</li>
                            <li class="collection-item">Hipertrofia adenotonsilar</li>
                            <li class="collection-item">Obesidade</li>
                            <li class="collection-item">Anomalias cranio-faciais</li>
                            <li class="collection-item">Macroglossia</li>
                            <li class="collection-item">Laringomalácia</li>
                            <li class="collection-item">Estenose subglótica</li>
                            <li class="collection-item">Mucopolissacaridose e outras doenças metabólicas de depósito</li>
                            <li class="collection-item">Fenda palatina</li>
                            <li class="collection-item">Causas funcionais: sucção de bicos e dedos, uso de mamadeira, falta de aleitamento materno.</li>
                        </ul>
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