<?php
/*
 * Cabeçalho compartilhado.
 * Cada página define antes de incluir:
 *   $pageTitle — título da aba
 *   $base      — caminho até a raiz de /php  (''  nas páginas raiz, '../' em /php/servicos)
 *   $assets    — caminho até a raiz do projeto ('../' nas páginas raiz, '../../' em /php/servicos)
 */
if (!isset($base))   { $base = ''; }
if (!isset($assets)) { $assets = '../'; }
if (!isset($pageTitle)) { $pageTitle = 'Limão Cravo — Design, Marketing e Tecnologia'; }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?></title>
  <link rel="stylesheet" href="<?= $assets ?>style.css">
  <link rel="icon" type="image/png" href="<?= $assets ?>imagens/limao-cravo-logo-1.png">
</head>
<body>

<!-- ── HEADER ── -->
<header id="header">
  <div class="logo"><a href="<?= $base ?>index.php"><img src="<?= $assets ?>imagens/limao-cravo-logo-2.png" alt="Limão Cravo"></a></div>
  <nav>
    <div class="nav-dropdown">
      <a href="<?= $base ?>index.php#services" data-pt="Serviços" data-en="Services">Serviços</a>
      <div class="dropdown-menu">
        <div class="dropdown-panel">
          <div class="dropdown-col">
            <div class="dropdown-col-title" data-pt="Design" data-en="Design">Design</div>
            <a href="<?= $base ?>servicos/branding.php" data-pt="Branding" data-en="Branding">Branding</a>
            <a href="<?= $base ?>servicos/design-grafico.php" data-pt="Design Gráfico" data-en="Graphic Design">Design Gráfico</a>
            <a href="<?= $base ?>servicos/ilustracao.php" data-pt="Ilustração" data-en="Illustration">Ilustração</a>
            <a href="<?= $base ?>servicos/embalagens.php" data-pt="Embalagens" data-en="Packaging">Embalagens</a>
            <a href="<?= $base ?>servicos/audiovisual-motion.php" data-pt="Audiovisual e Motion" data-en="Audiovisual and Motion">Audiovisual e Motion</a>
          </div>
          <div class="dropdown-col">
            <div class="dropdown-col-title" data-pt="Marketing" data-en="Marketing">Marketing</div>
            <a href="<?= $base ?>servicos/social-media.php" data-pt="Social Media" data-en="Social Media">Social Media</a>
            <a href="<?= $base ?>servicos/trafego-pago.php" data-pt="Tráfego Pago" data-en="Paid Traffic">Tráfego Pago</a>
            <a href="<?= $base ?>servicos/inbound-marketing.php" data-pt="Inbound Marketing" data-en="Inbound Marketing">Inbound Marketing</a>
            <a href="<?= $base ?>servicos/seo-performance.php" data-pt="SEO e Performance" data-en="SEO and Performance">SEO e Performance</a>
          </div>
          <div class="dropdown-col">
            <div class="dropdown-col-title" data-pt="Tecnologia" data-en="Technology">Tecnologia</div>
            <a href="<?= $base ?>servicos/ux-ui.php" data-pt="UX/UI Design" data-en="UX/UI Design">UX/UI Design</a>
            <a href="<?= $base ?>servicos/sites.php#institucional" data-pt="Sites Institucionais" data-en="Institutional Websites">Sites Institucionais</a>
            <a href="<?= $base ?>servicos/sites.php#ecommerce" data-pt="E-commerce" data-en="E-commerce">E-commerce</a>
            <a href="<?= $base ?>servicos/sistemas.php" data-pt="Sistemas" data-en="Systems">Sistemas</a>
          </div>
        </div>
      </div>
    </div>
    <a href="<?= $base ?>sobre-nos.php" data-pt="Sobre nós" data-en="About us">Sobre nós</a>
    <a href="https://limaocravo.blog/" target="_blank" rel="noopener" data-pt="Blog" data-en="Blog">Blog</a>
  </nav>
  <button class="nav-toggle" id="navToggle" aria-label="Abrir menu" aria-expanded="false">
    <span></span><span></span><span></span>
  </button>
  <div class="header-right">
    <div class="lang-toggle">
      <button id="btn-pt" class="active" onclick="setLang('pt')">PT</button>
      <button id="btn-en" onclick="setLang('en')">EN</button>
    </div>
    <a class="btn-cta-header" href="<?= $base ?>orcamento.php"
       data-pt="Solicitar Orçamento"
       data-en="Request a Quote">Solicitar Orçamento</a>
  </div>
</header>
