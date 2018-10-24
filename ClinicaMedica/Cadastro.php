<!DOCTYPE html>
<html>

    <head>

        <title> Clinica Médica </title>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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

        /* Cor verde do texto "Cuide..." */
        #cuide, #Atfooter{
            color: #0DB26B;
        }

        /*Fonte para esse tipo de tags*/
        p, span, h5,h4, #Atfooter{
            font-family: raleway, sans-serif;
            color: #f3e5f5    ;
        }

        .topicos{
            color: #605E5E;
        }

        body{
            overflow-x: hidden;
        }
        h1{
            color: #ce93d8  ;
        }
        input{
            color: #e1bee7  ;
        }
        .conteudo{
            background: linear-gradient(#8e24aa   , #ab47bc  );
        }

    </style>

    <body class="grey lighten-3">

        <div class="conteudo">

            <?php 
            require_once('navbar.php');
            ?>
            <!--SingUp-->
            <div class="container">
                <div class="container">
                    <h1>Cadastro</h1>
                    <!--Container do formulario-->
                    <div class="row">
                        <form method="post" class="col s12" action="Valida-Cadastro.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="tUsuario" id="usuario" type="text" class="validate">
                                    <label class="active" for="usuario">Usuário</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="tEmail" id="email" type="text" class="validate">
                                    <label class="active" for="email">E-mail</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="tSenha" id="senha" type="password" class="validate">
                                    <label class="active" for="senha">Senha</label>
                                </div>
                            </div>
                            <div class="row">
                                <p>Gênero:</p>
                                <label>
                                    <input value="M" class="with-gap" name="tGenero" type="radio"  />
                                    <span>Masculino</span>
                                </label>
                                <label>
                                    <input value="F" class="with-gap" name="tGenero" type="radio"  />
                                    <span>Feminino</span>
                                </label>
                            </div>
                            <div class="right-align">
                                <button type="submit" class="waves-effect waves-light btn"> Entrar </button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
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
