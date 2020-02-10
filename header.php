<!DOCTYPE html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="sidebar-div mobile-menu--js">
                    <?php get_sidebar(); ?>
                </div>
                <div class="search-container">
                    <?php get_search_form(); ?>
                </div>
                <div class="main-content-div row justify-content-center">
                    <div id="mob-header">
                        <a href="<?php echo get_home_url(); ?>">
                            <img class="mob-logo" src="<?php echo get_theme_file_uri('/images/logod/vepa_full.svg'); ?>" alt="Vepa">
                        </a>
                        <div class="mob-nav">
                            <div class="burger-menu">
                                <span class="burger-menu-item"></span>
                                <span class="burger-menu-item"></span>
                                <span class="burger-menu-item"></span>
                            </div>
                            <div class="close-burger">
                                <img src="<?php echo get_theme_file_uri('/images/Ikoonid/40x40/close.svg'); ?>" alt="sulge">
                            </div>
                        </div>
                    </div>
                    <?php page_banner(); ?>
