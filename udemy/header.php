<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create a WordPress Theme</title>

  <?php wp_head(); ?>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">

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

        <ul class="nav navbar-nav ">
          <li><a href="#about">About</a></li>
          <li><a href="#partists">Artists</a></li>
          <li><a href="#preleases">Releases</a></li>
          <li><a href="#contact">Contact</a></li>


        </ul>
      </div>
    </div>
  </nav>
