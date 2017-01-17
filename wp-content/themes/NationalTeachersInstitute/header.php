<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); wp_title(' | ', true, 'left') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Victor Nwaokocha" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,200,300" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>  
    <a id="top"></a>
    <div id="loader">
        <div id="loader-bar1" class="loader-bar"></div>
    </div>
    <div id="header">
        <div id="header-top" class="hidden-xs hidden-sm">
            <div class="container">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                    <ul id="header-infos" type="none">
                        <li><i class="fa fa-phone"></i>&nbsp;&nbsp; +23481471447144</li>
                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp; INFO@NTI.NG</li>
                        <li><i class="fa fa-marker"></i>&nbsp;&nbsp; Kaduna, Nigeria</li>
                        <li><a href="#"><i class="fa fa-lock"></i>&nbsp;&nbsp; Register / Login</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div id="header-social-icons" class="pull-right">
                        <ul id="header-links" type="none">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-nav">
            <div class="container">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#menu" aria-expanded="false" class="navbar-toggle collapsed"><span>MENU</span></button>
                            <a href="#" class="navbar-brand"><img src="<?php bloginfo('template_url'); ?>/assets/logo-light.svg" class="logo" /></a>
                        </div>
                        <?php
                            wp_nav_menu( array(
                                'menu' => 'primary',
                                'theme_location' => 'primary',
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                                'menu_class' => 'nav navbar-nav navbar-left',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker(),
                            ));
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
