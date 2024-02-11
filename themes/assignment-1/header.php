<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width,  initial-scale=1">
        <?php wp_head(); ?>

        <!-- add your JS -->
        <!-- add you custom CSS (I am going to use tailwind CSS) -->

        <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css"> -->
        <link rel="stylesheet" href="<?php 
        echo esc_url(home_url('wp-content/themes/assignment-1/assets/css/style.css'))
        
        ?>"/>
        <!-- add your Fonts -->
    </head>

    <body <?php body_class(); ?>>
        <header class=" header">
            <nav class="nav_items"> 
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo esc_url(home_url('wp-content/uploads/2024/02/logo.png')); ?>" alt="header logo" class="logo">
                </a>
        

                <div  class="nav_item">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'main',
                        'theme_location' => '',
                        'depth' => 2,
                        'fallback_cb' => false
                    ));

                    ?>
                </div>
            </nav>
        </header>
  