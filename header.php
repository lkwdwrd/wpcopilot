<?php
/**
 * The Header for the theme.
 *
 * Displays all of the <head> section and everything up till whatever I decided
 *
 * @package WordPress
 * @subpackage WP Copilot Rev 1
 * @since 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  wp_head();
?>
</head>

<body <?php body_class(); ?>>
	<div id="top-bar">
        <div class="content">
            <nav id="head-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="pagewrap" class="pagewrap">
        <div class="featured">
            <header>
                <div class="content">
                    <div class="center">
                        <nav id="main-nav-left">
                            <ul>
                                <li><a href="#"><span class="icon menu-icon">&#xf02d;</span><span class="menu-title">Articles</span></a></li>
                                <li><a href="#"><span class="icon menu-icon"><!-- &#xf03d; -->&#xf008;</span><span class="menu-title">Tutorials</span></a></li>
                            </ul>
                        </nav>
                        <h1 class="logo">
                            <img alt="WP Copilot Logo" title="WP Copilot Logo" src="../img/WPCopiot-Logo.png" />
                        </h1>
                        <nav id="main-nav-right">
                            <ul>
                                <li><a href="#"><span class="icon menu-icon">&#xf02b;</span><span class="menu-title">Products</span></a></li>
                                <li><a href="#"><span class="icon menu-icon"><!--&#xf0a1;-->&#xf0c0;</span><span class="menu-title">Connect</span></a>
                                    <ul>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Github</a></li>
                                        <li><a href="#">Email</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <div class="content featured-content">
                    <img src="../img/slider.png" style="display: block; margin: 0 auto;" />
                </div>
            </div>
            <div class="main-wrap">
            	<div class="content main-body">
