<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		ritual
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,600,700,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <?php include('svg-defs.svg'); ?>
        <header class="header">
            <div class="line-top clearfix">
                <div class="logo inside clearfix">
                    <a href="index.php" title="RitualWines" class="clearfix">
                        <img src="img/logo.svg" alt="logo">
                        <img src="img/logo-dark.svg" alt="logo" class="logo-dark">
                        <svg><use xlink:href="#shape-ritual" /></svg>
                    </a>
                </div><!--.logo-->
                <div class="icon-mobile">
                    <svg><use xlink:href="#shape-icon-hamburger" /></svg>
                </div><!--icon-mobile-->
            </div>
            <div class="slide-menu clearfix">
                <div class="clearfix">
                    <nav class="box--half--menu redes">
                        <a href="#" title="Siguenos en Facebook" target="_blank">
                            <svg><use xlink:href="#shape-icon-face" /></svg>
                        </a>
                        <a href="#" title="Siguenos en Twitter" target="_blank">
                            <svg><use xlink:href="#shape-icon-twitt" /></svg>
                        </a>
                        <a href="#" title="Siguenos en Instagram" target="_blank">
                            <svg><use xlink:href="#shape-icon-insta" /></svg>
                        </a>
                    </nav><!--box--half redes-->
                    <nav class="box--half--menu language">
                        <div class="search">
                            <form action="">
                                <div class="input-group">
                                    <input type="text">
                                </div>
                                <div class="send-group">
                                    <input type="submit" value=" ">
                                    <svg><use xlink:href="#shape-icon-lupa" /></svg>
                                </div>
                            </form> 
                        </div><!--search-->
                        <a href="page-contact.php" title="contact us" class="contact-us<?php if ( $page == 'contact' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                            <svg><use xlink:href="#shape-icon-letter" /></svg>
                        </a>
                        <div class="language--change">
                            <a href="#" title="English" class="active">English</a>
                            <span class="no-mobile">-</span>
                            <a href="#" title="Español">Español</a>
                        </div><!--.language--change-->
                    </nav><!--box--half language-->
                </div>
                <ul class="box--full menu">
                    <li>
                        <a href="page-winemaking.php" title="Winemaking" class="<?php if ( $page == 'winemaking' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Winemaking</a>
                    </li>
                    <li>
                        <a href="page-the-estate.php" title="The Estate" class="<?php if ( $page == 'the-estate' ) { echo ' current-menu-item current-page-ancestor'; } ?>">The Estate</a>
                    </li>
                    <li>
                        <a href="page-farming-practices.php" title="Farming Practices" class="<?php if ( $page == 'farming-practices' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Farming Practices</a>
                    </li>
                    <li>
                        <a href="page-the-wines.php" title="The Wines" class="<?php if ( $page == 'the-wines' ) { echo ' current-menu-item current-page-ancestor'; } ?>">The Wines</a>
                    </li>
                    <li>
                        <a href="page-news.php" title="News" class="<?php if ( $page == 'news' ) { echo ' current-menu-item current-page-ancestor'; } ?>">News</a>
                    </li>
                    <li>
                        <a href="page-visit-us.php" title="Visit us">Visit us</a>
                    </li>
                </ul><!--.box--full-->
            </div><!--.slide-menu-->
        </header><!--.header-->