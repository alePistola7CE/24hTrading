<?php


  function theme_customize_register($wp_customize){
    //Front page showcase section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', '24hTrading'),
      'description' => sprintf(__('Options for showcase', '24hTrading')),
      'priority'  => 130
    ));

    //immagine di sfondo per slide 1
    $wp_customize->add_setting('showcase_image', array(
      'default' =>  get_bloginfo('template_directory').'/img/trading.jpg',
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   =>  __('Immagine slide 1', '24hTrading'),
      'section' => 'showcase',
      'setting' => 'showcase_image',
      'priority' => 1
    )));

    //Heading title 1
    $wp_customize->add_setting('showcase_heading', array(
      'default' =>  _x("Cos'è 24hTrading", '24hTrading'),
      'type'    => 'theme_mod',
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   =>  __('Titolo slide 1', '24hTrading'),
      'section' => 'showcase',
      'priority' => 2
    ));

    //Subtext 1
    $wp_customize->add_setting('showcase_subtext', array(
      'default' =>  _x("24hTrading è una guida completa al trading che nasce dall’esperienza di un gruppo di appassionati di finanza con l’obiettivo di condividere la nostra conoscenza a proposito di broker, tecniche, strategie vincenti e trucchi: vogliamo che il trading sia profittevole per tutti!", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_subtext', array(
      'label'   =>  __('Sottotitolo', '24hTrading'),
      'section' => 'showcase',
      'priority' => 3
    ));

    //button slide 1
    $wp_customize->add_setting('btn_text', array(
      'default' =>  _x("Inizia ora!", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label'   =>  __('Testo bottone slide 1', '24hTrading'),
      'section' => 'showcase',
      'priority' => 4
    ));

    $wp_customize->add_setting('btn_url', array(
      'default' =>  _x("http://localhost/24hTrading/wordpress/come-iniziare/", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label'   =>  __('Url bottone slide 1', '24hTrading'),
      'section' => 'showcase',
      'priority' => 5
    ));

    //immagine di sfondo per slide 2
    $wp_customize->add_setting('showcase_image2', array(
      'default' =>  get_bloginfo('template_directory').'/img/grafici.jpg',
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image2', array(
      'label'   =>  __('Immagine slide 2', '24hTrading'),
      'section' => 'showcase',
      'setting' => 'showcase_image2',
      'priority' => 6
    )));

    //Heading title 2
    $wp_customize->add_setting('showcase_heading_2', array(
      'default' =>  _x("Cos'è il trading online?", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading_2', array(
      'label'   =>  __('Titolo slide 2', '24hTrading'),
      'section' => 'showcase',
      'priority' => 7
    ));

    //Subtext 2
    $wp_customize->add_setting('showcase_subtext2', array(
      'default' =>  _x("Il trading online consiste nel cercare di ottenere un guadagno in base alle oscillazioni dei mercati finanziari. Operare sui mercati finanziari può portare elevati rendimenti a patto di utilizzare strumenti, tecniche e strategie adeguate.", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_subtext2', array(
      'label'   =>  __('Sottotitolo 2', '24hTrading'),
      'section' => 'showcase',
      'priority' => 8
    ));

    //button slide 2
    $wp_customize->add_setting('btn_text2', array(
      'default' =>  _x("Scopri come!", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text2', array(
      'label'   =>  __('Testo bottone slide 2', '24hTrading'),
      'section' => 'showcase',
      'priority' => 9
    ));

    $wp_customize->add_setting('btn_url2', array(
      'default' =>  _x("http://localhost/24hTrading/wordpress/come-iniziare/", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url2', array(
      'label'   =>  __('Url bottone slide 2', '24hTrading'),
      'section' => 'showcase',
      'priority' => 10
    ));


    //immagine di sfondo per slide 3
    $wp_customize->add_setting('showcase_image3', array(
      'default' =>  get_bloginfo('template_directory').'/img/busman.jpg',
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image3', array(
      'label'   =>  __('Immagine slide 3', '24hTrading'),
      'section' => 'showcase',
      'setting' => 'showcase_image3',
      'priority' => 11
    )));

    //Heading title 3
    $wp_customize->add_setting('showcase_heading_3', array(
      'default' =>  _x("Come iniziare adesso", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading_3', array(
      'label'   =>  __('Titolo slide 3', '24hTrading'),
      'section' => 'showcase',
      'priority' => 12
    ));

    //subtext 3
    $wp_customize->add_setting('showcase_subtext3', array(
      'default' =>  _x("Se vuoi cominciare a fare trading, ti consigliamo di iniziare creando un conto su questa piattaforma che prevede solo 10€ per l’apertura di un conto di trading. Potrai così iniziare a fare pratica davvero con dei capitali molto bassi. Avrai anche a disposizione un conto demo completamente gratuito.", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_subtext3', array(
      'label'   =>  __('Sottotitolo 3', '24hTrading'),
      'section' => 'showcase',
      'priority' => 13
    ));

    //button slide 3
    $wp_customize->add_setting('btn_text3', array(
      'default' =>  _x("Inizia subito", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text3', array(
      'label'   =>  __('Testo bottone slide 3', '24hTrading'),
      'section' => 'showcase',
      'priority' => 14
    ));

    $wp_customize->add_setting('btn_url3', array(
      'default' =>  _x("http://localhost/24hTrading/wordpress/come-iniziare/", '24hTrading'),
      'type'    => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url3', array(
      'label'   =>  __('Url bottone slide 3', '24hTrading'),
      'section' => 'showcase',
      'priority' => 15
    ));


  }



  add_action("customize_register", "theme_customize_register");


  ?>
