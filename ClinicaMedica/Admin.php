<?php 
    session_start();
    include "Conexao.php";
    $sql_banco = mysqli_query($conexao, "SELECT * FROM pergunta");
?>

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
        }
        
        .topicos{
            color: #605E5E;
        }
        
        body{
            overflow-x: hidden;
        }

    </style>

<body class="grey lighten-3">

    <!-- Nav-Bar -->
    <div style="background-color: rgb(145, 85, 167);">
        <nav class="z-depth-0" style="height: 100px;">
            <div class="nav-wrapper white">
                <ul class="center">
                    <!-- ><li><a href="index.php"><img src="Img_Prog/logo.png" height="100px" width="200px;"> </a></li> -->
                    <li class="lina"><a href="Sobre-Nos.php" class="black-text"> SOBRE NÓS </a></li>
                    <li class="lina"><a href="Espcialidades.php" class="black-text dropdown-trigger" data-target="Especialidades"> ESPECIALIDADES <i class="material-icons right"> arrow_drop_down </i></a></li>
                    <li class="lina"><a href="Convenios.php" class="black-text"> CONVÊNIOS </a></li>
                    <li class="lina"><a href="Contato.php" class="black-text"> CONTATO </a></li>
                </ul>
            </div>
        </nav>


        <!-- Dropdown Structure -->
        <ul id="Especialidades" class="dropdown-content z-depth-0">
            <li><a href="Espcialidades.php" class="black-text center"> ÁREAS </a></li>
            <li><a href="Cardiologia.php" class="black-text center"> CARDIOLOGIA </a></li>
            <li><a href="Neurologia.php" class="black-text center"> NEUROLOGIA </a></li>
            <li><a href="Ortopedia.php" class="black-text center"> ORTOPEDIA </a></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 112 container center z-depth-5">
                    <div class="card-panel z-depth-5">
                        <nav class="nav-extended green darken-3">
                            <div class="nav-content">
                                <ul class="tabs tabs-transparent">
                                    <li class="tab"><a href="#imagens"> Imagens </a></li>
                                    <li class="tab"><a href="#videos"> Vídeos </a></li>
                                    <li class="tab"><a href="#usuarios"> Usúarios </a></li>
                                    <li class="tab"><a href="#perguntas"> Perguntas </a></li>
                                    <li class="tab"><a href="#uploadP"> Upload de Perguntas </a></li>
                                </ul>
                            </div>
                        </nav>
                        <div clas="row">
                            <div id="imagens">
                                <div class="col s12 m12 l12">
                                    <table class="striped">
                                        <thead>
                                            <tr>
                                                <th> Imagem </th>
                                                <th> Data de Publicação </th>
                                                <th> Remover </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>

                                                </td>
                                                <td>
                                                    <h8></h8>
                                                </td>
                                                <td>

                                                    <button class='btn-floating waves-effect waves-light red darken-2' type='button' onclick=''>
                                                        <i class='material-icons right'> close </i>
                                                    </button>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col s12 m12 l12">
                                    <br>
                                    <h4 class="center"> Upload de Imagem </h4><br>
                                    <form name="formUpload" method="post" action="#" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix"> library_books </i>
                                                <label for="cNome">Nome: </label><input class="active validate" type="text" name="tNome" id="cNome" maxlength="60" placeholder="Nome do Arquivo" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="file-field input-field">
                                                <div class="btn waves-effect waves-light green darken-3">
                                                    <span> Imagem </span>
                                                    <input type="file" name="arquivo">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Upload do Arquivo">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn waves-effect waves-light green darken-3 right" type="submit" onclick="return valida()"> Publicar
                                            <i class="material-icons right"> send </i>
                                        </button>
                                    </form>
                                </div>
                                <br>
                            </div>
                        </div>

                        <div clas="row">
                            <div id="videos">
                                <div class="col s12 m12 l12">
                                    <table class="striped">
                                        <thead>
                                            <tr>
                                                <th> Vídeo </th>
                                                <th> Data de Publicação </th>
                                                <th> Remover </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>

                                                </td>
                                                <td>
                                                    <h8></h8>
                                                </td>
                                                <td>

                                                    <button class='btn-floating waves-effect waves-light red darken-2' type='button' onclick=''>
                                                        <i class='material-icons right'> close </i>
                                                    </button>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="col s12 m12 l12">
                                    <br>
                                    <h4 class="center"> Upload de Vídeo </h4><br>
                                    <form name="formUpload" method="post" action="#" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix"> library_books </i>
                                                <label for="cNome">Nome: </label><input class="active validate" type="text" name="tNome" id="cNome" maxlength="60" placeholder="Nome do Arquivo" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="file-field input-field">
                                                <div class="btn waves-effect waves-light green darken-3">
                                                    <span> Vídeo </span>
                                                    <input type="file" name="arquivo">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Upload do Arquivo">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn waves-effect waves-light green darken-3 right" type="submit" onclick="return valida()"> Publicar
                                            <i class="material-icons right"> send </i>
                                        </button>
                                    </form>
                                </div>
                                <br>
                            </div>
                        </div>

                        <div clas="row">
                            <div id="usuarios" class="col s12 m12 l12">
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th> Usúario </th>
                                            <th> Data de Registro </th>
                                            <th> Remover </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>

                                            </td>
                                            <td>
                                                <h8></h8>
                                            </td>
                                            <td>

                                                <button class='btn-floating waves-effect waves-light red darken-2' type='button' onclick=''>
                                                    <i class='material-icons right'> close </i>
                                                </button>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="perguntas" class="row">
                                <div class="col s12 m12 l12">
                                    <table class="striped">
                                        <thead>
                                            <tr>
                                                <th> Pergunta </th>
                                                <th> Alterar </th>
                                                <th> Remover </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($l = mysqli_fetch_array($sql_banco)){ ?>
                                            <tr>
                                                <td>
                                                    <?php echo $l["descricao"]; ?>
                                                </td>
                                                <td>
                                                    <a href="Atualizar-Pergunta.php?id=<?php echo $l["codigoPergunta"]; ?>" class="btn-floating blue"><i class="material-icons"> edit </i></a>
                                                </td>
                                                <td>
                                                    <a href="javascript: if(confirm('Tem certeza que deseja remover esta pergunta ?')) location.href='Remover-Pergunta.php?id=<?php echo $l["codigoPergunta"]; ?>';">
                                                        <button class='btn-floating waves-effect waves-light red darken-2' type='button' onclick=''>
                                                            <i class='material-icons right'> close </i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>

                        <div class="row">
                            <div id="uploadP" class="col s12 m12 l12">
                                <h4 class="center"> Upload de Pergunta </h4><br>
                                <form name="formUpload" method="post" action="Cadastrar-Pergunta.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> library_books </i>
                                            <label for="cPergunta">Pergunta: </label><input class="active validate" type="text" name="tPergunta" id="cPergunta" maxlength="60" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> check_circle </i>
                                            <label for="cAlterC">Alternativa Certa: </label><input class="active validate" type="text" name="tAlterC" id="cAlterC" maxlength="60" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> cancel </i>
                                            <label for="cAlterE1">Alternativa Errada 1: </label><input class="active validate" type="text" name="tAlterE1" id="cAlterE1" maxlength="60" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> cancel </i>
                                            <label for="cAlterE2">Alternativa Errada 2: </label><input class="active validate" type="text" name="tAlterE2" id="cAlterE2" maxlength="60" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> cancel </i>
                                            <label for="cAlterE3">Alternativa Errada 3: </label><input class="active validate" type="text" name="tAlterE3" id="cAlterE3" maxlength="60" required>
                                        </div>
                                    </div>

                                    <button class="btn waves-effect waves-light green darken-3 right" type="submit" onclick="return valida()"> Publicar
                                        <i class="material-icons right"> send </i>
                                    </button>
                                </form>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row grey lighten-3">
            <br><br>
            <div class="center">
                <h4 id="Atfooter"> Receba nossa newsletter </h4>
            </div>
            <div class="center">
                <p> Não há ninguém que ame a dor por si só, que a busque e queira tê-la, simplesmente por ser dor. </p>
            </div>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6 m6 l6 offset-m3 offset-l3">
                        <i class="material-icons prefix"> email </i>
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--Materialize JS-->
    <script src="js/materialize.min.js"></script>

    <!-- Activate Dropdown Menu -->
    <script>
        $(document).ready(function() {
            $(".dropdown-trigger").dropdown();
        });

    </script>

    <script>
        $(document).ready(function() {
            $('.tabs').tabs();
        });

    </script>

</body>

</html>
