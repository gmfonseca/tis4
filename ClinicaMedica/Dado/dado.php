<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    </head> 
    <script type=text/javascript>


        function startTimer() {
            //Reduzir o tamanho da imagem
            document.getElementById("face").style.width = "15%";
            document.getElementById("face").style.height = "10%";
            //Começar um intervalo para trocar as imagens
            var intervalo = setInterval(function displayNextImage() {
                if(x === images.length ){
                    //Quando terminar a animacao(passar por todas as outras faces)
                    x = 0; // zera o contador
                    document.getElementById("face").style.width = "30%"; //Volta imagem ao tamanho normal
                    document.getElementById("face").style.height = "20%";
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
                    element.src = "face1.JPG"
                    numeroTirado = 1;
                    break;
                case 2:
                    element.src = "face2.JPG"
                    numeroTirado = 2;
                    break;
                case 3:
                    element.src = "face3.JPG"
                    numeroTirado = 3;
                    break;
                case 4:
                    element.src = "face4.JPG"
                    numeroTirado = 4;
                    break;
                case 5:
                    element.src = "face5.JPG"
                    numeroTirado = 5;
                    break;
                case 6:
                    element.src = "face6.JPG"
                    numeroTirado = 6;
                    break;
                default:
                    break;
            }
        }
        var images = [], x = 0;
        images[0] = "face1.JPG";
        images[1] = "face2.JPG";
        images[2] = "face3.JPG";
        images[3] = "face4.JPG";
        images[4] = "face5.JPG";
        images[5] = "face6.JPG";
    </script>
    <style>
        img{
            width: 30%;
            height: 20%;
        }
    </style>

    <body>
        <img src="face1.JPG" alt="dado" id="face" onclick="startTimer()">

    </body>
</html>