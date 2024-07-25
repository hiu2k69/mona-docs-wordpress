<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php echo get_the_excerpt() ?: 'Welcome to Monadhub.xyz. At MonadHub, you can explore in-depth articles, stay updated with the latest news, and discover exciting projects within the Monad community.'; ?>" />

  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:title" content="<?php echo get_the_title(); ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?php echo get_permalink(); ?>" />
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url() ?: get_template_directory_uri() . '/assets/images/favicon.png'; ?>" />
  <meta property="og:locale" content="<?php echo get_locale(); ?>" />

  <!-- Twitter Card meta tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo get_the_title(); ?>" />
  <meta name="twitter:description" content="<?php echo get_the_excerpt() ?: 'Welcome to Monadhub.xyz. At MonadHub, you can explore in-depth articles, stay updated with the latest news, and discover exciting projects within the Monad community.'; ?>" />
  <meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url() ?: get_template_directory_uri() . '/assets/images/favicon.png'; ?>" />
  <meta name="twitter:site" content="@yoursite" />
  <meta name="twitter:creator" content="@yourhandle" />
  <?php wp_head(); ?>
  <title><?php echo get_the_title(); ?> - <?php bloginfo('name'); ?></title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
</head>

<style>
    .main-navigation .menu li a:hover {
        color: #836EF9;
        text-decoration: underline !important;
    }


    .main-navigation .menu li a.active {
        color: #836EF9;
    }
    html,body{
        overflow-x: hidden;
    }
</style>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="masthead" class="site-header-">
        <div class="header-container">
            <div class="site-branding">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/monad.png" alt="Logo">
                </a>
            </div>
            <nav id="site-navigation" class="main-navigation">
                <ul class="menu">
                    <li><a href="<?php echo home_url(); ?>" class="item-nav active">Home</a></li>
                    <li><a href="<?php echo home_url('/monad-learning'); ?>" class="item-nav">Monad Learning</a></li>
                    <li><a href="<?php echo home_url('/community-culture'); ?>" class="item-nav">Community Culture</a></li>
                    <li><a href="<?php echo home_url('/news'); ?>" class="item-nav">News</a></li>
                    <li><a href="<?php echo home_url('/about-monadhub'); ?>" class="item-nav">About MonadHub</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main id="main" class="site-main">