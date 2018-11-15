/**
 * Função para criar um objeto XMLHTTPRequest
 */
function CriaRequest() {
    try{
        request = new XMLHttpRequest();        
    }catch (IEAtual){
        
        try{
            request = new ActiveXObject("Msxml2.XMLHTTP");       
        }catch(IEAntigo){
        
            try{
                request = new ActiveXObject("Microsoft.XMLHTTP");          
            }catch(falha){
                request = false;
            }
        }
    }
    
    if (!request) 
        alert("Seu Navegador não suporta o jogo!");
    else
        return request;
}

/**
 * Função para enviar os dados
 */
function getDados() {
    
    // Declaração de Variáveis
    var result = document.getElementById("resultado");
    var xmlreq = CriaRequest();
    
    // Exibi a imagem de progresso
    
    // Monta a requisição
    xmlreq.open("GET", "perguntaTab.php", true);
    
    // Atribui uma função para ser executada sempre que houver uma mudança de estado
    xmlreq.onreadystatechange = function(){
        
        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {
            
            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}

function getExercicio() {
    
    // Declaração de Variáveis
    var result = document.getElementById("resultado");
    var xmlreq = CriaRequest();
    
    // Exibi a imagem de progresso
    
    // Monta a requisição
    xmlreq.open("GET", "exercicio.php", true);
    
    // Atribui uma função para ser executada sempre que houver uma mudança de estado
    xmlreq.onreadystatechange = function(){
        
        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {
            
            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}



