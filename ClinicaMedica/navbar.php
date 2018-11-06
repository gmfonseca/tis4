<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!--Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Materialize CSS-->
<link rel="stylesheet" href="css/materialize.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Kalam|Nunito|Patrick+Hand|Roboto+Mono|Raleway" rel="stylesheet">

<!-- Jquery-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--Materialize JS-->
<script src="js/materialize.min.js"></script>

<!----------------
REMOVER
IMPORT
DE
SCRIPT
E
CSS
DEPOIS
----------------->

<!-- DROPDOWN STRUCTURE -->
<ul id="drop-especialidade" class="dropdown-content purple lighten-2">
    <li><a href="Sintomas.php" class="white-text">SINAIS E SINTOMAS</a></li>
    <li><a href="AlteracoesRO.php" class="white-text">ALTERAÇÕES RO</a></li>
    <li><a href="ortopedia.php" class="white-text">ORTOPEDIA</a></li>
</ul>

<!-- NAVBAR -->
<nav class="purple lighten-1">
    <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">Logo</a>
        <a data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="Problema.php">O PROBLEMA</a></li>
            <li><a class="dropdown-trigger"  data-target="drop-especialidade">ESPECIALIDADES<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="convenios.php">CONVÊNIOS</a></li>
            <li><a href="Tratamento.php">TRATAMENTO</a></li>
            <li><a href="contato.php">CONTATO</a></li>
            <li><a href="Definir-Jogo.php">JOGOS</a></li>
            <li><a href="curiosidades.php">CURIOSIDADES</a></li>
<!--
            <li><a href="Login.php">LOGIN</a></li>
            <li><a href="Cadastro.php">CADASTRO</a></li>
-->
        </ul>
    </div>
</nav>

<!-- NAVBAR MOBILE -->
<ul id="mobile-demo" class="sidenav purple lighten-1">
    <li><a><i class="sidenav-close white-text material-icons">close</i></a></li>
    <li><a href="sobre-nos.php" class="collapsible-header white-text">SOBRE NÓS</a></li>
    <li>
        <ul class="collapsible collapsible-accordion">
            <li><a id="mob-especialidades" class="white-text collapsible-header">ESPECIALIDADES<i class="white-text material-icons chevron right">chevron_right</i></a>
                <div class="collapsible-body purple lighten-2">
                    <ul>
                        <li><a href="Sintomas.php" class="white-text">SINAIS E SINTOMAS</a></li>
                        <li><a href="AlteracoesRO.php" class="white-text">ALTERAÇÕES RO</a></li>
                        <li><a href="ortopedia.php" class="white-text">ORTOPEDIA</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li><a href="convenios.php" class="collapsible-header white-text white-text">CONVÊNIOS</a></li>
    <li><a href="contato.php" class="collapsible-header white-text">CONTATO</a></li>
    <li><a href="Definir-Jogo.php" class="collapsible-header white-text"> JOGOS</a></li>
    <li><a href="Login.php" class="collapsible-header white-text"> LOGIN</a></li>
    <li><a href="Cadastro.php" class="collapsible-header white-text"> CADASTRO</a></li>
</ul>
<!-- ESTE NAV É PARA DAR ESPAÇAMENTO (recomendo arrumar essa gambiarra temporária depois :D) -->

<!-- NAVBAR SCRIPT -->
<script>
    $(document).ready(() => {
        $('.sidenav').sidenav();
        $(".dropdown-trigger").dropdown();
        $('.collapsible').collapsible();
        // MOBILE ARROW     
        $('#mob-especialidades').click(() => {
            let val = ($('.chevron').html() == 'chevron_right') ? 'keyboard_arrow_down' : 'chevron_right';
            $('.chevron').html(val)
        })
    })
</script>