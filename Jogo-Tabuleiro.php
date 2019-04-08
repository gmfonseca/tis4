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

            body{
                zoom:25%;
            }
            
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

            #face{
                width: 370px;
                height: 350px;
                margin-left: 130px;
                margin-top: 70px;
                position: absolute;
                z-index: 1;
            }

            /*PERGUNTAS*/

            /* Borda arredondada card-painel*/
            .card-panel{
                border-radius: 15px;
            }

            /* Borda arredondada respostas collection */
            .collection{
                border-radius: 10px;
            }

            /* Fonte do título da pergunta */
            h3{
                font-family: 'Nunito';
            }

            /* Propriedades das respostas */
            .collection-item{
                font-size: 30px;
                font-family: 'Nunito';
                color: #424242 !important;
            }

            /* Muda cor ao passar o mouse */
            /*.muda-cor:hover{
                background: #1e88e5 !important;
                color: white !important;
            } */ 

            p{
                font-family: 'Nunito';
                font-size: 30px;
            }

            #perguntas{
                z-index: 1;
                position: absolute;
                margin-left: 1150px;
                margin-top:  10px;
            }
            #resultado{
                        z-index: 1;
                        position: fixed;
                        margin-left: 1020px;
                        margin-top:  -200px;
            }
            #principal{
                background-color: red;
            }
            
            #tabu{
                margin-left: 20%;
                margin-right: 25%;
            }

        </style>

        <script type=text/javascript>
            var pos =0;
            var travadado = 0;
            var travapergunta = 0;
            var p = 0;



            function andar(anda){
                p += anda;
                if(p > 41){
                    p = p - anda;
                    anda = 41 - p;
                    p += anda;
                }
                let numPassos = anda;
                var intervaloPassos = setInterval(function passos(numPassos){
                    if(y === anda){
                        y = 0;
                        if(p == 41){
                            calcEstatistica();
                        }else if(p == 4 || p == 10 || p == 13 || p == 21 || p == 31 || p == 38){
                            getExercicio();
                            getDesc();
                        }else{
                            getPergunta();   
                            getRespostas();
                        }
                        clearInterval(intervaloPassos);
                    }else{
                        document.getElementById(pos).hidden = true;
                        pos++;
                        document.getElementById(pos).hidden = false;
                        y++;
                    }
                }, 800);
            }


            //DADO
            function startTimer() {
                if(travadado == 0){
                    travadado = 1;
                    //Reduzir o tamanho da imagem
                    document.getElementById("face").style.width = "370px";
                    document.getElementById("face").style.height = "350px";
                    //Começar um intervalo para trocar as imagens
                    var intervalo = setInterval(function displayNextImage() {
                        if(x === images.length ){
                            //Quando terminar a animacao(passar por todas as outras faces)
                            x = 0; // zera o contador
                            document.getElementById("face").style.width = "370px"; //Volta imagem ao tamanho normal
                            document.getElementById("face").style.height = "350px%";
                            jogarDado(); //Faze a sorte do usuário(Escolhe o número e coloca a na face do dado)
                            clearInterval(intervalo);//quebra o loop do intervalo
                        }
                        else {
                            document.getElementById("face").src = images[x];//continua trocando as imagens
                            x++;
                        }
                    }, 130);//Tempo que cada imagem aparece 
                }
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
            var images = [], x = 0, y=0;
            images[0] = "Dado/face1.JPG";
            images[1] = "Dado/face2.JPG";
            images[2] = "Dado/face3.JPG";
            images[3] = "Dado/face4.JPG";
            images[4] = "Dado/face5.JPG";
            images[5] = "Dado/face6.JPG";


            //PERGUNTAS DO JOGO
            var contCerto = 0;
            var contErrado = 0;
            var numQuestoes = 0;

            function mudaCorCerto(btn_certo){
                 if(travapergunta == 0){
                    btn_certo.style.background = "#36bc27";
                 }
            }

            function mudaCorErrado(btn_errado){
                if(travapergunta == 0){
                    btn_errado.style.background = "red";
                }
            }

            function contaQuestoes(){
                numQuestoes = numQuestoes+1;
            }

            function contaAcerto(){
                if(travapergunta == 0){
                    travapergunta = 1;
                    contCerto = contCerto+1;
                    contaQuestoes();
                    var intvA = setInterval(function limpaResultA() {
                        document.getElementById('pergunta').innerHTML = "";
                        document.getElementById('respostas').innerHTML = "";
                        travapergunta = 0;
                        travadado = 0;
                        clearInterval(intvA);
                    },3000); 
                }
            }

            function contaErrado(){
                if(travapergunta == 0){
                    travapergunta = 1;
                    contErrado = contErrado+1;
                    contaQuestoes();
                    var intvE = setInterval(function limpaResultE() {
                        document.getElementById('pergunta').innerHTML = "";
                        document.getElementById('respostas').innerHTML = "";
                        travapergunta = 0;
                        travadado = 0;
                        clearInterval(intvE);
                    },3000);
                }
            }

            function concluirExe(){
                document.getElementById('pergunta').innerHTML = "";
                document.getElementById('respostas').innerHTML = "";
                alert("Ande 2 casas extras!");
                andar(2);
            }
            
            function calcEstatistica(){
                travadado = 1;
                alert('Você acertou ' + contCerto +' questões, errou ' + contErrado + ' de ' + numQuestoes + ' questões!');
            }

        </script>



    </head>
    <body style="background-color: rgb(4,180,4);">

        <script type="text/javascript" src="js/novoajax.js"></script>

        <div id="tabu">
            <img src="Img_Prog/tabuleiro/tab2.png" usemap="#mapaTabuleiro" id="tabuleiro">

            <map name="mapaTabuleiro">

                    <img src="Dado/face1.JPG" alt="dado" id="face" style="margin-left: 1470px; margin-top: 1650px;" onclick="startTimer()">
                    <img id="0" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 270px; position:absolute;">
                    <area title="partida" shape="rect" coords="121,481,476,590" />

                    <img id="1" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 500px; position:absolute;" hidden="true">
                    <area title="1" shape="rect" coords="198,598,405,826" />

                    <img id="2" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 720px; position:absolute;" hidden="true">
                    <area title="2" shape="rect" coords="200,834,404,1058" />

                    <img id="3" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 950px; position:absolute;" hidden="true">
                    <area title="3" shape="rect" coords="199,1065,400,1297" />

                    <img id="4" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 1180px; position:absolute;" hidden="true">
                    <area title="4" shape="rect" coords="201,1304,403,1535" />
    
                    <img id="5" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 1430px; position:absolute;" hidden="true">
                    <area title="5" shape="rect" coords="200,1542,402,1770" />
 
                    <img id="6" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 1650px; position:absolute;" hidden="true">
                    <area title="6" shape="rect" coords="203,1778,405,2006" />
   
                    <img id="7" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 210px; margin-top: 1890px; position:absolute;" hidden="true">
                    <area title="7" shape="rect" coords="195,2013,401,2241" />
 
                    <img id="8" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 470px; margin-top: 1890px; position:absolute;" hidden="true">
                    <area title="8" shape="rect" coords="407,2012,705,2244" />

                    <img id="9" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 1890px; position:absolute;" hidden="true">
                    <area title="9" shape="rect" coords="713,2015,947,2247" />
 
                    <img id="10" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 1660px; position:absolute;" hidden="true">
                    <area title="10" shape="rect" coords="718,1775,943,2007" />

                    <img id="11" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 1430px; position:absolute;" hidden="true">
                    <area title="11" shape="rect" coords="716,1542,949,1772" />
      
                    <img id="12" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 1180px; position:absolute;" hidden="true">
                    <area title="12" shape="rect" coords="715,1307,948,1537" />
         
                    <img id="13" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 950px; position:absolute;" hidden="true">
                    <area title="13" shape="rect" coords="713,1068,946,1298" />
          
                    <img id="14" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 720px; position:absolute;" hidden="true">
                    <area title="14" shape="rect" coords="711,834,944,1064" />
       
                    <img id="15" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 490px; position:absolute;" hidden="true">
                    <area title="15" shape="rect" coords="713,596,946,826" />
  
                    <img id="16" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 260px; position:absolute;" hidden="true">
                    <area title="16" shape="rect" coords="714,362,947,592" /> 
      
                    <img id="17" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 740px; margin-top: 20px; position:absolute;" hidden="true">
                    <area title="17" shape="rect" coords="711,119,944,357" />
    
                    <img id="18" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 990px; margin-top: 20px; position:absolute;" hidden="true">
                    <area title="18" shape="rect" coords="953,121,1183,358" />
    
                    <img id="19" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 1220px; margin-top: 20px; position:absolute;" hidden="true">
                    <area title="19" shape="rect" coords="1187,120,1420,358" />
            
                    <img id="20" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 1450px; margin-top: 20px; position:absolute;" hidden="true">
                    <area title="20" shape="rect" coords="1427,121,1660,359" >
          
                    <img id="21" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 1690px; margin-top: 20px; position:absolute;" hidden="true">
                    <area title="21" shape="rect" coords="1661,121,1894,359" />
        
                    <img id="22" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 1920px; margin-top: 20px; position:absolute;" hidden="true">
                    <area title="22" shape="rect" coords="1895,120,2127,360" />
         
                    <img id="23" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2160px; margin-top: 20px; position:absolute;" hidden="true">
                    <area title="23" shape="rect" coords="2134.9999389648438,123,2367.9999389648438,361" />

                    <img id="24" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 20px; position:absolute;" hidden="true">
                    <area title="24" shape="rect" coords="2368,119,2600,359" />
  
                    <img id="25" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 260px; position:absolute;" hidden="true">
                    <area title="25" shape="rect" coords="2368,365,2600,588" />

                    <img id="26" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 490px; position:absolute;" hidden="true">
                    <area title="26" shape="rect" coords="2369,593,2601,829" />
         
                    <img id="27" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 730px; position:absolute;" hidden="true">
                    <area title="27" shape="rect" coords="2369,831,2601,1067" />
    
                    <img id="28" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 960px; position:absolute;" hidden="true">
                    <area title="28" shape="rect" coords="2367.9999389648438,1067.9999389648438,2599.9999389648438,1303.9999389648438" />
    
                    <img id="29" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 1200px; position:absolute;" hidden="true">
                    <area title="29" shape="rect" coords="2367,1305,2599,1541" />
           
                    <img id="30" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 1440px; position:absolute;" hidden="true">
                    <area title="30" shape="rect" coords="2367,1542,2599,1778" />
         
                    <img id="31" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 1670px; position:absolute;" hidden="true">
                    <area title="31" shape="rect" coords="2369,1778,2601,2014" />
           
                    <img id="32" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2390px; margin-top: 1910px; position:absolute;" hidden="true">
                    <area title="32" shape="rect" coords="2369,2018,2601,2246" />
     
                    <img id="33" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2690px; margin-top: 1910px; position:absolute;" hidden="true">
                    <area title="33" shape="rect" coords="2605,2015,2931,2247" />
         
                    <img id="34" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 1910px; position:absolute;" hidden="true">
                    <area title="34" shape="rect" coords="2937,2013,3171,2246" />
        
                    <img id="35" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 1670px; position:absolute;" hidden="true">
                    <area title="35" shape="rect" coords="2938,1775,3172,2012" />
      
                    <img  id="36" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 1440px; position:absolute;" hidden="true">
                    <area title="36" shape="rect" coords="2936,1538,3170,1775" />
       
                    <img id="37" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 1200px; position:absolute;" hidden="true">
                    <area title="37" shape="rect" coords="2934,1301,3168,1538" />
        
                    <img id="38" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 960px; position:absolute;" hidden="true">
                    <area title="38" shape="rect" coords="2936,1067,3170,1304" />
      
                    <img id="39" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 730px; position:absolute;" hidden="true">
                    <area title="39" shape="rect" coords="2935,833,3169,1064" />
          
                    <img id="40" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 500px; position:absolute;" hidden="true">
                    <area title="40" shape="rect" coords="2935,594,3169,831" />
      
                    <img id="41" src="Img_Prog/tabuleiro/player.png" style="height: 300px; width: 200px; margin-left: 2970px; margin-top: 250px; position:absolute;" hidden="true">
                    <area title="chegada" shape="rect" coords="2884,476,3239,585" />



                <area id="dado" title="dado" shape="rect" coords="126,98,481,364" />
                <area id="perguntas" title="perguntas" shape="rect" coords="1067,471,2249,1303" />
                <area id="video" title="video" shape="rect" coords="1066,1417,2248,2249" />
            </map>  

            <div id="test3" class="col s12 m12 l12 grey darken-3" style="margin-left: 1040px; margin-top: 500px; height: 1000px; width: 1250px; position:absolute;">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div id="pergunta" class="card-panel  grey darken-2" style="border-radius: 0px;">                          
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div id="respostas" class="col s12 m8 l8  offset-m2 offset-l2">
                    </div>
                </div>
            </div>
        <!-- PERGUNTAS -->

        <br><br><br>

                <div id="resultado"></div>
                
        </div>
        
        <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--Materialize JS-->
        <script src="js/materialize.min.js"></script>

    </body>
</html>