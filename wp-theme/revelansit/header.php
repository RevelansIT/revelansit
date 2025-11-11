<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body id="top" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
      <div class="container">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">Revelans IT</a>
        <button class="nav-toggle" aria-expanded="false" aria-controls="primary-nav">Menu</button>
        <nav id="primary-nav" class="site-nav" aria-label="<?php esc_attr_e('Hoofdmenu', 'revelansit'); ?>">
          <?php
            wp_nav_menu([
              'theme_location' => 'primary',
              'container'      => false,
              'fallback_cb'    => 'revelansit_primary_menu_fallback',
              'items_wrap'     => '%3$s',
              'walker'         => new RevelansIT_Primary_Walker(),
            ]);
          ?>
        </nav>
      </div>
    </header>

    <main id="content" class="container">
