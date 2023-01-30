<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap
 * @since Bootstrap 2.0
 */
?>
<!DOCTYPE html>
<html lang=<?php language_attributes(); ?> dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Bootstrap to WordPress 2.0</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="top-navigation">
        <div class="container">
            <div class="row justify-content-end align-items-center">
                <div class="col-md-6">
                    <?php if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <div class="col-md-6">

                    <?php

                    wp_nav_menu(
                        array(
                            'theme_location'       => 'primary_menu',
                            'depth'                =>  3,
                            'menu'                 => 'primary_menu',
                            'container'            => 'nav',
                            'container_class'      => 'main-menu',
                            'menu_class'           => 'top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled',
                            'fallback_cb'          => false,
                        )
                    )

                    ?>


                    <button type="button" class="navbar-open">
                        <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
                    </button>

                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn">
                    <i class="flaticon flaticon-close"></i>
                </div>
                <nav class="menu-box">
                    <ul class="navigation clearfix"></ul>
                </nav>
            </div>
        </div>
    </div>