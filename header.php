<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name=“theme-color” content=“#fff>
  <?php wp_head(); ?>
  <?php otm_page_header_scripts(); ?>
  <?php otm_page_faq_schema(); ?>
</head>

<body <?php body_class(); ?>>

<?php otm_custom_js_code_body(); ?>

<header class="header py-1 ">
  <div class="container">
    <div class="row d-flex">

        <div class="navbar-logo">
          <a href="">
            <a href="<?php echo esc_url( home_url( '/' ) )?>">
              <!-- <?php echo otm_site_logo('primary'); ?> -->
              <?php echo otm_custom_logo(); ?>
              <img src="wp-content/themes/OTM-WP-THEME-2.0-MASTER/assets/img/nav-logo.png" alt="">
            </a>
          </a>
        </div>
        
        <?php 
          $menu_array = array(
            'container'       => 'div',
            'theme_location'  => 'main-menu',
            'container_class' => 'menu-list',
            'fallback_cb'     => false,
            'items_wrap'      => '<ul id="%1$s" class="navbar-nav w-100 justify-content-center %2$s">%3$s</ul>',
            'depth'           => 3,
            'walker'          => new otm_theme_walker_nav_menu()
          );
          wp_nav_menu( $menu_array );
        ?>

    </div><!--/.row-->
  </div><!--/.container-->
</header><!--/.header-->
