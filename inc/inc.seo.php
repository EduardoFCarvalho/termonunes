<?php
header("Content-Type: text/html; charset=utf-8", true);

# ----------------------------------------
# Catch actual page
# ----------------------------------------


$activePage = basename($_SERVER['REQUEST_URI']);
$activePage = explode('?', $activePage);
$activePage = $activePage[0];

# ----------------------------------------
# Cases
# ----------------------------------------
if ($activePage == '') {
  $activePage = 'home';
}
switch ($activePage) {

  case "sobre-nos":
    $title       = "Conheça a Termonunes";
    $description = "";
    break;

  case "servicos":
    $title       = "Serviços";
    $description = "";
    break;

  case "informações":
    $title       = "Informações";
    $description = "";
    break;

  case "contato":
    $title       = "Contato";
    $description = "Entre em contato com a Termonunes e contrate nossos serviços. Conheça mais sobre nossa empresa e os serviços que oferecemos";
    break;

  case "politica-de-privacidade":
    $title       = "Política de privacidade";
    $description = "Está buscando por POLÍTICA DE PRIVACIDADE Conheça agora a Termonunes e conheça os nossos serviços! Aqui você irá encontrar as melhores opções.";
    break;

  case "mapa-do-site":
    $title       = "Mapa do site";
    $description = "Conheça todas as páginas que nossa empresa oferece clicando aqui. A Termonunes tem a os melhores serviços manutenção de Chiller de São Paulo";
    break;

  case "home":
    $title       = "Bem-vindo a Termonunes";
    $description = "";
    $activeHome  = "active";
    break;
}
$keywords = "";

$proto = (isset($_SERVER['HTTPS']) === true) ? 'https' : 'http';
$canonical = $proto . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html lang="pt-BR">
<!--
# ~~~~~~~~~~~~~~~~~~ #
# Author: Ubika Brasil #
# ~~~~~~~~~~~~~~~~~~ #
-->

<head>

  <!-- Sempre checar se está OK daqui para baixo -->

  <!-- Title -->
  <title><?= $title ?><?= $isHome = !isset($isHome) ? ' | Termonunes' : ''; ?></title>
  <!-- Charset -->
  <meta charset="UTF-8">
  <!-- Meta Tags -->
  <meta name="description" content="<?= $description ?>">
  <meta name="keywords" content="<?= $keywords ?>">
  <!-- Canonical -->
  <link rel="canonical" href="<?= $canonical ?>" />
  <!-- OpenGraph -->
  <meta property="og:region" content="Brasil">
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:type" content="article">
  <meta property="og:description" content="<?= $description ?>">
  <meta property="og:site_name" content="<?= $title ?>">
  <meta property="og:keywords" content="<?= $keywords ?>">
  <meta property="og:canonical" content="<?= $canonical ?>">

  <meta name="author" content="Ubika Brasil">
  <meta name="fone" content="11 3673-7056 | 11 3864-6282" />
  <meta name="city" content="São Paulo" />

  <!-- Daqui para baixo é padrão, não mexer -->

  <meta name="country" content="Brasil" />
  <meta name="geo.region" content="-BR" />
  <meta name="copyright" content="Copyright " />
  <meta name="geo.position" content="-23.539351;-46.681925">
  <meta name="geo.placename" content="São Paulo-SP">
  <meta name="geo.region" content="SP-BR">
  <meta name="ICBM" content="-23.539351;-46.681925">
  <meta name="robots" content="index,follow">
  <meta name="rating" content="General">
  <meta name="revisit-after" content="2 days">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
  <!-- CSS -->
  <?php include 'inc/inc.css.php'; ?>


  <!-- Google tag (gtag.js) -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-WTVD98X4VW"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-WTVD98X4VW');
  </script> -->