<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('title'); ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); echo '/style.css?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Paytone+One" rel="stylesheet">
    <?php wp_head(); ?>
  

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
 <a href="http://localhost:3000/bgfi/"><img  class="logo" src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo_bgfi.png" alt="logo"/></a>
  
  <div class="container_menu">
  <?php wp_nav_menu(array('menu_id' => 'menu_container','theme_location' => 'primary' )); ?> 
  <div class="searchbar"><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon_search.png" alt="logo"/></div>
  </div>
</header>