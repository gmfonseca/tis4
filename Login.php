<!DOCTYPE html>
<html>

    <head>

        <title> Clinica Médica - Login </title>

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
    </style>

    <body class="green darken-4">

        <div class="conteudo">

            <!--Login-->
            <div class="container">
                <div class="container">
                    <h1 class="white-text">Login</h1>
                    <!--Container do formulario-->
                    <div class="row">
                        <form method="post" class="col s12" action="Valida-Login.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">person</i>
                                    <input name="tUsuario" id="usuario" type="text" class="validate white-text">
                                    <label class="active" for="usuario">Usuário</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input name="tSenha" id="senha" type="password" class="validate white-text">
                                    <label class="active" for="senha">Senha</label>
                                </div>
                            </div>
                            <div class="left-align">
                                <button type="submit" class="waves-effect waves-light btn" style="width: 100%"> Entrar </button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
        </div>


        <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--Materialize JS-->
        <script src="js/materialize.min.js"></script>
    </body>

</html>
