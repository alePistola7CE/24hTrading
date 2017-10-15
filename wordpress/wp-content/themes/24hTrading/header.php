<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Alessandro Pistola">
    <link rel="icon" href="../../../../favicon.ico">

    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand brand" href="#"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
               'container_id'      => 'navbarCollapse',
               'menu_class'        => 'navbar-nav mr-auto',
               'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
               'walker'            => new WP_Bootstrap_Navwalker())
           );
       ?>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="wp-content/themes/24hTrading/img/trading.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-md-block text-left">
              <h1>Cos'è 24hTrading</h1>
              <p>24hTrading è una guida completa al trading che nasce dall’esperienza di un gruppo di appassionati di finanza con l’obiettivo di condividere la nostra conoscenza a proposito di broker, tecniche, strategie vincenti e trucchi: vogliamo che il trading sia profittevole per tutti!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Inizia ora!</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="wp-content/themes/24hTrading/img/grafici.jpg" style="opacity:0.40;" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-md-block text-right">
              <h1>Cos'è il trading online?</h1>
              <p>Il trading online consiste nel cercare di ottenere un guadagno in base alle oscillazioni dei mercati finanziari. Operare sui mercati finanziari può portare elevati rendimenti a patto di utilizzare strumenti, tecniche e strategie adeguate.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Scopri come!</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="wp-content/themes/24hTrading/img/busman.jpg" style="opacity:0.60;" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-md-block">
              <h1>Come iniziare adesso</h1>
              <p>Se vuoi cominciare a fare trading, ti consigliamo di iniziare creando un conto su questa piattaforma che prevede solo 10€ per l’apertura di un conto di trading. Potrai così iniziare a fare pratica davvero con dei capitali molto bassi. Avrai anche a disposizione un conto demo completamente gratuito.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Inizia subito</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="wp-content/themes/24hTrading/img/startup.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Strategie</h2>
          <p>Prima di aprire un conto di trading sarebbe bene decidere quali obiettivi si vogliono ottenere col trading e quali rischi si è disposti a correre. Guadagnare 50 euro al giorno (che fanno comunque 1.500 "eurini" al mese…) oppure trasformare questa attività in una vera e propria professione? E che capitale si può rischiare di perdere?</p>
          <p><a class="btn btn-secondary" href="#" role="button">Strategie &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="wp-content/themes/24hTrading/img/uomo.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Affiliazioni</h2>
          <p>In pratica questo sistema prevede che chiunque possa diventare un rivenditore dei prodotti (insomma: un affiliato), percependo così un compenso in denaro su ogni vendita effettuata grazie a lui. In genere per diventare affiliato basta semplicemente iscriversi a un programma di affiliazione, prelevare i link e i banner che sponsorizzano i prodotti e inserirli nel proprio sito internet.</p>
          <p><a class="btn btn-secondary" href="#" role="button">Unisciti a noi &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="wp-content/themes/24hTrading/img/bitcoin.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Criptovalute</h2>
          <p>Una criptovaluta (o crittovaluta o criptomoneta) è una valuta paritaria, decentralizzata digitale la cui implementazione si basa sui principi della crittografia per convalidare le transazioni e la generazione di moneta in sé. Come ogni valuta digitale, consente di effettuare pagamenti online in maniera sicura.</p>
          <p><a class="btn btn-secondary" href="#" role="button">Altro su criptovalute &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
