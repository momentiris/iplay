<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#6d9aea">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <header>
        <button ontouchstart="return true" class="hamburger hamburger--spin" type="button">
            <span class="hamburger-box" >
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <nav role="navigation" class="nav_nav">
            <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
        </nav>
    </header>
