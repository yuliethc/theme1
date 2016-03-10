<!doctype html>
<html lang "es">
<head>
  <meta charset="utf-8">
  <title>A litle of everything! Solutions.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.css.map">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css.map">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap-theme.css.map">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap-theme.min.css.map">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,500,300,700' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
  <script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js" type="text/javascript"</script>
  <script src="<?php bloginfo('template_url')?>/js/bootstrap.js" type="text/javascript"</script>
  <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js" type="text/javascript"</script>
  <script src="<?php bloginfo('template_url')?>/js/npm.js" type="text/javascript"</script>
   <?php wp_head();?>

   <!-- Integracion FB -->

  <div id="fb-root"></div>

  <script>(function(d, s, id) {

    var js, fjs = d.getElementsByTagName(s)[0];

    if (d.getElementById(id)) return;

    js = d.createElement(s); js.id = id;

    js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=609768322408511";

    fjs.parentNode.insertBefore(js, fjs);

  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Fin Integracion con FB -->
 
</head>
<body>
<header>
      <div id="logo">
       <img src="<?php bloginfo('template_url')?>/img/logo.png" width="250" height="125">
      </div>
      
      <nav>
       <?php wp_nav_menu(
        array(
          'container'=>false,
          'items_wrap'=>'<ul id="menu-top">%3$s</ul>',
          'theme_location'=>'menu'
          ));?>
      </nav>
  </header>