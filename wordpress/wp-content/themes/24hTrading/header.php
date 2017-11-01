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
      <img src="<?php bloginfo('template_directory');?>/img/icon.png" alt="icon" class='logo-img'>
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
          <img class="first-slide" src="<?php bloginfo('template_directory');?>/img/trading.jpg" style="height:38rem;" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-md-block text-left">
              <h1><?php echo get_theme_mod("showcase_heading", "Cos'è 24hTrading"); ?></h1>
              <p><?php echo get_theme_mod("showcase_subtext", "24hTrading è una guida completa al trading che nasce dall’esperienza di un gruppo di appassionati di finanza con l’obiettivo di condividere la nostra conoscenza a proposito di broker, tecniche, strategie vincenti e trucchi: vogliamo che il trading sia profittevole per tutti!"); ?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('btn_url', 'http://localhost/24hTrading/wordpress/come-iniziare/'); ?>" role="button"><?php echo get_theme_mod('btn_text', 'Inizia ora!'); ?></a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="<?php bloginfo('template_directory');?>/img/grafici.jpg" style="opacity:0.40;" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-md-block text-right">
              <h1><?php echo get_theme_mod("showcase_heading2", "Cos'è il trading online?"); ?></h1>
              <p><?php echo get_theme_mod("showcase_subtext2", "Il trading online consiste nel cercare di ottenere un guadagno in base alle oscillazioni dei mercati finanziari. Operare sui mercati finanziari può portare elevati rendimenti a patto di utilizzare strumenti, tecniche e strategie adeguate."); ?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('btn_url2', 'http://localhost/24hTrading/wordpress/come-iniziare/'); ?>" role="button"><?php echo get_theme_mod('btn_text', 'Scopri come!'); ?></a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="<?php bloginfo('template_directory');?>/img/busman.jpg" style="opacity:0.60;" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-md-block">
              <h1><?php echo get_theme_mod("showcase_heading3", "Come iniziare adesso"); ?></h1>
              <p><?php echo get_theme_mod("showcase_subtext3", "Se vuoi cominciare a fare trading, ti consigliamo di iniziare creando un conto su questa piattaforma che prevede solo 10€ per l’apertura di un conto di trading. Potrai così iniziare a fare pratica davvero con dei capitali molto bassi. Avrai anche a disposizione un conto demo completamente gratuito."); ?></p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('btn_url3', 'http://localhost/24hTrading/wordpress/come-iniziare/'); ?>" role="button"><?php echo get_theme_mod('btn_text', 'Inizia subito'); ?></a></p>
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
    <script type="text/javascript">
      first_slide = document.getElementsByClassName('first-slide')[0];
      first_slide.src = "<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/trading.jpg'); ?>";

      second_slide = document.getElementsByClassName('second-slide')[0];
      second_slide.src = "<?php echo get_theme_mod('showcase_image2', get_bloginfo('template_url').'/img/grafici.jpg'); ?>";

      third_slide = document.getElementsByClassName('third-slide')[0];
      third_slide.src = "<?php echo get_theme_mod('showcase_image3', get_bloginfo('template_url').'/img/busman.jpg'); ?>";
    </script>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
