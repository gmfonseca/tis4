<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Clinica Médica - Jogo Infantíl </title>
        <meta charset="utf-8">
        <!--Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS-->
        <link rel="stylesheet" href="css/materialize.min.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kalam|Nunito|Patrick+Hand|Roboto+Mono|Raleway" rel="stylesheet">
        <style>

            #tabuleiro{
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: cover;
                z-index: -1;
                position: absolute;
            }

            #player{
                height: 300px;
                width: 200px;
                z-index:2;
                position: absolute;
            }

            area{
                cursor: pointer;
            }

        </style>

        <script type=text/javascript>
            var pos =0;

            function alertaTeste(){
                alert('FUNCIONOU');
            }

            function andar(anda){
                let numPassos = anda;
                var intervaloPassos = setInterval(function passos(numPassos){
                    if(y === anda){
                        y = 0;
                        clearInterval(intervaloPassos)
                    }else{
                        document.getElementById(pos).hidden = true;
                        pos++;
                        document.getElementById(pos).hidden = false;
                        y++;
                    }

                }, 800)
             }


            //DADO
            function startTimer() {
                //Reduzir o tamanho da imagem
                document.getElementById("face").style.width = "15%";
                document.getElementById("face").style.height = "10%";
                //Começar um intervalo para trocar as imagens
                var intervalo = setInterval(function displayNextImage() {
                    if(x === images.length ){
                        //Quando terminar a animacao(passar por todas as outras faces)
                        x = 0; // zera o contador
                        document.getElementById("face").style.width = "15%"; //Volta imagem ao tamanho normal
                        document.getElementById("face").style.height = "10%%";
                        jogarDado(); //Faze a sorte do usuário(Escolhe o número e coloca a na face do dado)
                        clearInterval(intervalo);//quebra o loop do intervalo
                    }
                    else {
                        document.getElementById("face").src = images[x];//continua trocando as imagens
                        x++;
                    }
                }, 130);//Tempo que cada imagem aparece
            }

            function jogarDado(){ 
                var element = document.getElementById('face');
                var sorte = Math.floor((Math.random() * 6) + 1);
                var numeroTirado;
                switch(sorte){
                    case 1:
                        element.src = "Dado/face1.JPG";
                        numeroTirado = 1;
                        andar(numeroTirado);
                        break;
                    case 2:
                        element.src = "Dado/face2.JPG";
                        numeroTirado = 2;
                        andar(numeroTirado);
                        break;
                    case 3:
                        element.src = "Dado/face3.JPG";
                        numeroTirado = 3;
                        andar(numeroTirado);
                        break;
                    case 4:
                        element.src = "Dado/face4.JPG";
                        numeroTirado = 4;
                        andar(numeroTirado);
                        break;
                    case 5:
                        element.src = "Dado/face5.JPG";
                        numeroTirado = 5;
                        andar(numeroTirado);
                        break;
                    case 6:
                        element.src = "Dado/face6.JPG";
                        numeroTirado = 6;
                        andar(numeroTirado);
                        break;
                    default:
                        break;
                }
            }
            var images = [], x = 0,y = 0;
            images[0] = "Dado/face1.JPG";
            images[1] = "Dado/face2.JPG";
            images[2] = "Dado/face3.JPG";
            images[3] = "Dado/face4.JPG";
            images[4] = "Dado/face5.JPG";
            images[5] = "Dado/face6.JPG";
        </script>

        <style>
            #face{
                width: 15%;
                height: 10%;
                z-index: 4;
            }
        </style>

    </head>
    <body>
        <img src="Dado/face1.JPG" alt="dado" id="face" onclick="startTimer()">
        <div>
            <img src="Img_Prog/tabuleiro/tabuleiro.png" usemap="#mapaTabuleiro" id="tabuleiro">

            <map name="mapaTabuleiro" style="z-index: -1;">
                <div>
                    <img id="0" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 270px;">
                    <area title="partida" shape="rect" coords="121,481,476,590" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="1" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 500px;" hidden="true">
                    <area title="1" shape="rect" coords="198,598,405,826" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="2" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 720px;" hidden="true">
                    <area title="2" shape="rect" coords="200,834,404,1058" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="3" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 950px;" hidden="true">
                    <area title="3" shape="rect" coords="199,1065,400,1297" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="4" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 1180px;" hidden="true">
                    <area title="4" shape="rect" coords="201,1304,403,1535" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="5" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 1430px;" hidden="true">
                    <area title="5" shape="rect" coords="200,1542,402,1770" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="6" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 1650px;" hidden="true">
                    <area title="6" shape="rect" coords="203,1778,405,2006" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="7" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 1890px;" hidden="true">
                    <area title="7" shape="rect" coords="195,2013,401,2241" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="8" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 470px; margin-top: 1890px;" hidden="true">
                    <area title="8" shape="rect" coords="407,2012,705,2244" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="9" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 1890px;" hidden="true">
                    <area title="9" shape="rect" coords="713,2015,947,2247" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="10" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 1660px;" hidden="true">
                    <area title="10" shape="rect" coords="718,1775,943,2007" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="11" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 1430px;" hidden="true">
                    <area title="11" shape="rect" coords="716,1542,949,1772" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="12" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 1180px;" hidden="true">
                    <area title="12" shape="rect" coords="715,1307,948,1537" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="13" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 950px;" hidden="true">
                    <area title="13" shape="rect" coords="713,1068,946,1298" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="14" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 720px;" hidden="true">
                    <area title="14" shape="rect" coords="711,834,944,1064" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="15" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 490px;" hidden="true">
                    <area title="15" shape="rect" coords="713,596,946,826" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="16" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 260px;" hidden="true">
                    <area title="16" shape="rect" coords="714,362,947,592" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="17" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 20px;" hidden="true">
                    <area title="17" shape="rect" coords="711,119,944,357" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="18" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 990px; margin-top: 20px;" hidden="true">
                    <area title="18" shape="rect" coords="953,121,1183,358" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="19" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 1220px; margin-top: 20px;" hidden="true">
                    <area title="19" shape="rect" coords="1187,120,1420,358" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="20" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 1450px; margin-top: 20px;" hidden="true">
                    <area title="20" shape="rect" coords="1427,121,1660,359" onclick="alertaTeste()">
                </div>
                <div>
                    <img id="21" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 1690px; margin-top: 20px;" hidden="true">
                    <area title="21" shape="rect" coords="1661,121,1894,359" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="22" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 1920px; margin-top: 20px;" hidden="true">
                    <area title="22" shape="rect" coords="1895,120,2127,360" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="23" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2160px; margin-top: 20px;" hidden="true">
                    <area title="23" shape="rect" coords="2134.9999389648438,123,2367.9999389648438,361" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="24" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 20px;" hidden="true">
                    <area title="24" shape="rect" coords="2368,119,2600,359" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="25" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 260px;" hidden="true">
                    <area title="25" shape="rect" coords="2368,365,2600,588" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="26" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 490px;" hidden="true">
                    <area title="26" shape="rect" coords="2369,593,2601,829" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="27" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 730px;" hidden="true">
                    <area title="27" shape="rect" coords="2369,831,2601,1067" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="28" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 960px;" hidden="true">
                    <area title="28" shape="rect" coords="2367.9999389648438,1067.9999389648438,2599.9999389648438,1303.9999389648438" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="29" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 1200px;" hidden="true">
                    <area title="29" shape="rect" coords="2367,1305,2599,1541" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="30" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 1440px;" hidden="true">
                    <area title="30" shape="rect" coords="2367,1542,2599,1778" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="31" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 1670px;" hidden="true">
                    <area title="31" shape="rect" coords="2369,1778,2601,2014" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="32" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 1910px;" hidden="true">
                    <area title="32" shape="rect" coords="2369,2018,2601,2246" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="33" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2690px; margin-top: 1910px;" hidden="true">
                    <area title="33" shape="rect" coords="2605,2015,2931,2247" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="34" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 1910px;" hidden="true">
                    <area title="34" shape="rect" coords="2937,2013,3171,2246" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="35" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 1670px;" hidden="true">
                    <area title="35" shape="rect" coords="2938,1775,3172,2012" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img  id="36" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 1440px;" hidden="true">
                    <area title="36" shape="rect" coords="2936,1538,3170,1775" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="37" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 1200px;" hidden="true">
                    <area title="37" shape="rect" coords="2934,1301,3168,1538" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="38" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 960px;" hidden="true">
                    <area title="38" shape="rect" coords="2936,1067,3170,1304" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="39" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 730px;" hidden="true">
                    <area title="39" shape="rect" coords="2935,833,3169,1064" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="40" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 500px;" hidden="true">
                    <area title="40" shape="rect" coords="2935,594,3169,831" onclick="alertaTeste()"/>
                </div>
                <div>
                    <img id="41" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 250px;" hidden="true">
                    <area title="chegada" shape="rect" coords="2884,476,3239,585" onclick="alertaTeste()"/>
                </div>

                <area id="dado" title="dado" shape="rect" coords="126,98,481,364" onclick="alertaTeste()"/>
                <area id="perguntas" title="perguntas" shape="rect" coords="1067,471,2249,1303" onclick="alertaTeste()"/>
                <area id="video" title="video" shape="rect" coords="1066,1417,2248,2249" onclick="alertaTeste()"/>
            </map>  
        </div>

        <div class="container" style="position:relative;">
            <div class="row">
                <div class="col s6 m6 l6 offset-s4 offset-m4 offset-l4">
                    <a class="waves-effect waves-light btn-large" onclick="certo()"><i class="material-icons left">chevron_left</i> Certo </a>
                    <a class="waves-effect waves-light btn-large"><i onclick="errado()" class="material-icons right">check</i> Errado </a>
                </div>
            </div>
        </div>

        <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--Materialize JS-->
        <script src="js/materialize.min.js"></script>

    </body>
</html>