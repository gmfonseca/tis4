  <!DOCTYPE html>
  <html>
    <head>  
        
       <title> Clinica Médica - Prevalência </title>
        
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
        #SobreNos{
            background-color: rgba(109, 204, 163, 0.9);
        }

    </style>

    <body class="grey lighten-3">

        <div id="god" class="white"> 
            <div id="SobreNos" class="row">
                <?php 
                    require_once('navbar.php')
                ?>

                <div class="col s8 offset-s2">
                    <br>
                    <h4 class="white-text"> Prevalência </h4>
                    <br>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <br>
           
                    <div class="col s12 m6 l6">
                        <h4 class="corVerdeTexto"> Já existem estudos validados sobre as crianças respiradoras orais? </h4>
                        <p class="topicos"> 
                            Já existem estudos relacionados ao respirador oral como: tipos de respirador oral, estudos cefalométricos, 
							alterações craniofaciais, periodontais, faciais, comportamentais, posturais, dos órgãos fonoarticulatórios, 
							da força de língua, do estado nutricional, dos problemas de aprendizagem em crianças com obstrução das vias 
							aéreas superiores associados às dificuldades de atenção, correlação de problemas posturais com a aprendizagem, 
							associação da respiração oral com o transtorno de déficit de atenção e hiperatividade
                    
                        </p>
                    </div>
                </div>
				
				<div class="row">
                    <br>
                    <div class="col s24 m12 32">
                        <h4 class="corVerdeTexto">  Qual é a prevalência da respiração oral?  </h4>
						<div class="row">
							<div class="col s10 m10 22 offset-s2 offset-m2 offset-l2">
								<img class="responsive-img" src="Img_Prog/tabela1.png" style="height: 419px; width: 720px;">
							</div>
						</div>
                    </div>
                </div>
				
				<div class="row">
                    <br>
                    <div class="col s24 m12 32">
                        <h4 class="corVerdeTexto">  O que é a Síndrome do Respirador Oral? </h4>
                        <p class="topicos"> 
                           A Síndrome do Respirador  oral é um conjunto de alterações derivada de uma disfunção respiratória que é caracterizada 
						   pelo hábito de substituir a respiração nasal (via nariz) pela respiração oral por um período maior do que seis meses e
						   que já apresenta ausência do selamento labial passivo, alterações dentocraniofaciais, distúrbios da fala e mastigação  
						   perturbações do sono noturno , dificuldade de aprendizado  e adaptações compensatórias da posição de cabeça. Esta síndrome
						   pode surgir em decorrência a outras doenças ou situações nas quais levem à necessidade de se respirar pela boca. Ela torna-se
						   uma síndrome, e causa de preocupação, quando se torna um hábito frequente, presente na vida da criança por mais de seis meses.
						   Se não abordada adequadamente, ela pode gerar complicações no desenvolvimento da criança.
                    
                        </p>
                    </div>
                </div>
				
				<div class="row">
                    <br>
                    <div class="col s24 m12 32">
                        <h4 class="corVerdeTexto"> Quais são as causas da respiração oral? </h4>
                        <p class="topicos"> 
                            Geralmente a respiração oral é causada por algum fator obstrutivo que impede a passagem de ar pelo nariz. 
							Muitos são os fatores que podem impedir parcial ou totalmente o fluxo normal pelas vias aéreas superiores, 
							entre eles podemos citar:
							<ul>
							<li class="topicos">- Hipertrofia de cornetos
							<li class="topicos">- Desvio de septo nasal( que pode ser provocado por traumas de acidentes domésticos ou parto)
							<li class="topicos">- Hipertrofia de amígdalas - geralmente devido à problemas alérgicos (rinite, sinusite, bronquite),
							<li class="topicos">- Hipertrofia de adenóides
							<li class="topicos">- Pólipos nasais
							<li class="topicos">- Asma brônquica
							<li class="topicos">- Insuficiência labial
							</ul>
                    
                        </p>
                    </div>
                </div>
				
				
                <br><br>             
            </div>
            <br><br><br>
        </div>
    
        <?php 
            require_once('footer.php')
        ?>
        
        <!-- Jquery-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--Materialize JS-->
        <script src="js/materialize.min.js"></script>
        
    </body>
  </html>