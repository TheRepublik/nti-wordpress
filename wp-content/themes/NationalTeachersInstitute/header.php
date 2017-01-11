<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); wp_title(' | ', true, 'left') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Victor Nwaokocha" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />

    <link href="<?php bloginfo('template_url'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,200,300" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>  
    <a id="top"></a>
    <div id="loader">
        <div id="loader-bar1" class="loader-bar"></div>
    </div>
    <div id="header">
        <div id="header-top">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4"><img src="<?php bloginfo('template_url'); ?>/assets/logo-light.svg" height="140" /></div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-8">
                    <div id="header-buttons" class="pull-right">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="login-btn pull-right"><i class="fa fa-user"></i>&nbsp; PORTAL LOG IN</div>
                        </div>
                        <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">
                            <div id="header-social-icons" class="pull-right">
                                <ul id="header-links" type="none">
                                    <li>Follow Us &nbsp;&nbsp;
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-nav">
            <div class="container">
                <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10">
                    <nav class="navbar">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false" class="navbar-toggle collapsed"><span>MENU</span></button>
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
                <div id="header-nav-search" class="col-lg-4 col-md-2 col-sm-2 col-xs-2">
                    <input id="search-input" type="text" placeholder="Search" class="hidden-sm hidden-xs" />
                    <div id="search-btn" class="hidden-lg hidden-md"><i class="fa fa-search"></i></div>
                </div>
            </div>
        </div>
    </div>
