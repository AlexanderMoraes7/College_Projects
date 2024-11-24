<?php

$Info = "../images/icons8-about-64.png";
$Doadora = "../images/icons8-love-64.png";
$Feed = "../images/icons8-home-64.png";
$Unidade = "../images/icons8-hospital-64.png";
$Perfil = "../images/icons8-user-64.png";
$Subtitulo = "";
$Setting = "../images/icons8-settings-30.png";
$Bell = "../images/icons8-bell-30.png";
$Usuario = "../images/icons8-female-profile-100.png";
global $Mensagem;

$currentPage = basename($_SERVER['PHP_SELF']);
switch ($currentPage) {
    case "info.php":
        $Info = "../images/icons8-about-64-white.png";
        $Subtitulo = "Infomações";
        break;
    case "sejadoadora.php":
        $Doadora = "../images/icons8-love-64-white.png";
        $Subtitulo = "Formulário";
        break;
    case 'paginaprincipal.php':
        $Feed = "../images/icons8-home-64-white.png";
        $Subtitulo = "Apoio á Amamentação";
        break;
    case "unidades.php":
        $Unidade = "../images/icons8-hospital-64-white.png";
        $Subtitulo = "Unidades";
        break;
    case "perfil.php":
        $Perfil = "../images/icons8-user-64-white.png";
        $Subtitulo = "Perfil";
        break;
    case "config.php":
        $Setting = "../images/icons8-settings-30-margenta-amarelo.png";
        $Subtitulo = "Configuração";
        break;
    case "configsistema.php":
        $Subtitulo = "Configuração do sistema";
        break;
    case "higiene_cuidados.php":
        $Info = "../images/icons8-about-64-white.png";
        $Subtitulo = "Higiene e cuidados pessoais";
        break;
    case "info_banco_leite.php":
        $Info = "../images/icons8-about-64-white.png";
        $Subtitulo = "Informações sobre o banco de leite";
        break;
    case "info_cientifica.php":
        $Info = "../images/icons8-about-64-white.png";
        $Subtitulo = "Informações científicas";
        break;
    case "mitos_verdades.php":
        $Info = "../images/icons8-about-64-white.png";
        $Subtitulo = "Mitos e verdades";
        break;
    case "notificacoes.php":
        $Subtitulo = "Notificações";
        break;
    case "privacidade.php":
        $Subtitulo = "Privacidade";
        break;
}


$Topo = 
'<div class="Top">
<h1>
    '.$Subtitulo.'
</h1>
<button class="Sino"><img src="'.$Bell.'" alt="Notificações"></button>
<a class="Config" href="config.php"><img src="'.$Setting.'" alt="Configurações"></a>
</div>';

$Bottom =
'<div class="Bottom">
    <a href="info.php"><img src="'.$Info.'" alt="Informações"></a>
    <a href="sejadoadora.php"><img src="'.$Doadora.'" alt="Seja Doadora"></a>
    <a href="paginaprincipal.php"><img src="'.$Feed.'" alt="Página Principal"></a>
    <a href="unidades.php"><img src="'.$Unidade.'" alt="Unidades de doação de leite materno"></a>
    <a href="perfil.php"><img src="'.$Perfil.'" alt="Perfil do usuário"></a>
</div>';
