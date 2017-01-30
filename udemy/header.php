<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <?php wp_head();?>
    </head>

    <body>


  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <div class="collapse navbar-collapse" id="myNavbar">

          <?php
          wp_nav_menu(array(
              'theme_location'  => 'primary',
              'container'       => false,
              'menu_class'      => 'nav navbar-nav'
          ));
          ?>
        
      </div>
    </div>
  </nav>
