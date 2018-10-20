<?php
/**
 * Code the Change template for the header
 *
 * @package startertheme
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description') ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif ?>
    <?php wp_head() ?>
  </head>

<body <?php body_class() ?>>

<div id="nav-wrapper" class="container">
  <nav class="navbar navbar-fixed-top" role="navigation">
    <div id="inner-nav-wrapper" class="container-fluid">
      <div class="navbar-header">
        <img class="header-logo" src="<?php echo get_header_image(); ?>" alt="" />
        <div class="header-title">YOUTH REGISTRATION PROGRAM</div>
      </div>
    
      <?php /* Primary navigation */
      wp_nav_menu( array(
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'container-menu-class',
          'container_id'      => 'main-nav',
          'menu_class'        => 'nav navbar-nav navbar-right',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
  ?>
    </div>
  </nav>
</div>