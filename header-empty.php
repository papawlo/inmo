<!DOCTYPE html>
<html <?php language_attributes(); ?> class="font-sans">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-white antialiased font-sans'); ?>>

    <?php do_action('tailpress_site_before'); ?>
    
