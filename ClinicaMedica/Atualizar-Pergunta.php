<?php 
    session_start();
    include "Conexao.php";
    $id = intval($_GET['id']);

    $sql_banco = mysqli_query($conexao, "SELECT * FROM pergunta WHERE codigoPergunta='$id' LIMIT 1");
    $r = mysqli_fetch_assoc($sql_banco);

    $sql_certo = mysqli_query($conexao, "SELECT * FROM respostacerta WHERE cod_pergunta='$id' LIMIT 1");
    $c = mysqli_fetch_assoc($sql_certo);

    $sql_pegadados = mysqli_query($conexao, "SELECT * FROM respostaerrada WHERE cod_pergunta='$id'");

    $radio = 1;
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
        <div class="container">
            <div class="row">
                <div class="col s12 m12 112 container center z-depth-5">
                    <div class="card-panel z-depth-5">
                        <div class="row">
                            <div id="uploadP" class="col s12 m12 l12">
                                <h4 class="center"> Alterar Pergunta </h4><br>
                                <form name="formUpload" method="post" action="Alterar-Pergunta.php" enctype="multipart/form-data">
                                    <input type="text" value="<?php  echo $id ?>" name="tId" id="cId" hidden />
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> library_books </i>
                                            <label for="cPergunta">Pergunta: </label><input class="active validate" type="text" name="tPergunta" id="cPergunta" value="<?php echo $r["descricao"]; ?>" maxlength="60" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> check_circle </i>
                                            <label for="cAlterC">Alternativa Certa: </label><input class="active validate" type="text" name="tAlterC" id="cAlterC" value="<?php echo $c["descricao"]; ?>" maxlength="60" required>
                                        </div>
                                    </div>
                                    <?php while($l = mysqli_fetch_array($sql_pegadados)){ ?>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix"> cancel </i>
                                            <label for="<?php echo "cAlterE".$radio; ?>">Alternativa Errada <?php echo $radio; ?>: </label><input class="active validate" type="text" name="<?php echo "tAlterE".$radio; ?>" id="<?php echo "cAlterE".$radio; ?>" value="<?php echo $l["descricao"]; ?>" maxlength="60" required>
                                        </div>
                                    </div>
                                    <?php $radio = $radio+1; } ?>
<div class="row">
                                    <button class="btn waves-effect waves-light green darken-3 right" type="submit" onclick=""> Publicar
                                        <i class="material-icons right"> send </i>
                                    </button>
                                    
                                    <a href="Admin.php">
                                    <button class="btn waves-effect waves-light green darken-3 right" type="button" onclick=""> Voltar
                        <i class="material-icons left"> send </i>    
                    </button> 
                                        </a>
    </div>
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
