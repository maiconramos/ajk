<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=9">
<meta name="description" content="<?php bloginfo('description')?>">
<meta property="og:site_name" content="<?php bloginfo('name')?>">
<meta property="og:url" content="Link">
<meta property="og:title" content="<?php bloginfo('name')?>">
<meta property="og:description" content="<?php bloginfo('description')?>">
<meta property="og:image" content="">
<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, user-scalable=no">
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png">
<link rel="manifest" href="../assets/images/favicons/manifest.json">
<link rel="mask-icon" href="../assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#fe4500">
    <?php wp_head() ?>
<!-- Style -->
</head>
<body <?php body_class() ?>>
<div class="loader-body" id="loader">
    <div class="sound-bar">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>
<nav id="menu-principal" class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
    <a class="navbar-brand" href="<?php bloginfo('url')?>" title="<?php bloginfo('name')?>">
        <svg id="logo" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 452 104.7"><g fill-rule="evenodd"><path d="M432.2 17.9h1.2c1.7 0 2.7-.1 3.1-.2.4-.1.7-.4 1-.7.2-.3.4-.7.4-1.1 0-.4-.1-.8-.3-1.1-.2-.3-.6-.5-1-.7-.4-.1-1.5-.2-3.1-.2h-1.2v4zm-2.9 8.1V11.7h7.5c1 .1 1.7.3 2.2.6.5.3 1 .8 1.3 1.4.4.6.5 1.3.5 2.1 0 1-.3 1.9-1 2.6-.7.7-1.6 1.2-2.8 1.4.4.2.8.3 1 .5.2.2.6.6 1 1.1.1.1.5.7 1.1 1.7l1.7 2.9h-3.6l-1.2-2.3c-.8-1.6-1.5-2.5-2-2.9-.5-.4-1.2-.6-2-.6h-.7V26h-3m6.1-18c-1.9 0-3.6.5-5.3 1.4-1.7.9-3 2.3-4 4-1 1.7-1.5 3.6-1.5 5.4 0 1.9.5 3.7 1.4 5.4 1 1.7 2.3 3 4 4 1.7 1 3.5 1.4 5.4 1.4 1.9 0 3.7-.5 5.4-1.4 1.7-1 3-2.3 4-4 1-1.7 1.4-3.5 1.4-5.4 0-1.9-.5-3.7-1.5-5.4-1-1.7-2.3-3.1-4-4-1.7-1-3.4-1.4-5.3-1.4m0-2.7c2.3 0 4.5.6 6.6 1.7 2.1 1.2 3.8 2.8 5 5 1.2 2.2 1.8 4.4 1.8 6.8 0 2.3-.6 4.6-1.8 6.7-1.2 2.1-2.8 3.8-5 5-2.1 1.2-4.4 1.8-6.7 1.8s-4.6-.6-6.7-1.8c-2.1-1.2-3.8-2.8-5-5s-1.8-4.4-1.8-6.7c0-2.4.6-4.6 1.8-6.8 1.2-2.2 2.9-3.8 5-5 2.3-1.1 4.5-1.7 6.8-1.7M115.4 5.1L4 98.7h40.4L120 35.1l12.7 63.6h42.8L156.3 5.1zM334.6 5h15.2l-28.4 20.9h-45.7l-36.1 72.8h-56l-4.5-21.9h34.6L239 25.9h-70.3L164.4 5z"/><path d="M121.8 77.8h-19.9L91.4 98.7h34.7zM320.4 31l-8.3 16.8 55.1-41.1 47.2-.1L354.8 51l56.8 47.7h-58.3l-26.9-22.6H298l-11.3 22.6h-38.6L281.7 31z"/></g></svg></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
            <?php
            wp_nav_menu( array(
		            'menu'              => 'Menu AJK',
		            'menu_class'        => 'navbar-nav ml-auto',
		            'menu_id'           => 'menu',
		            'container'         => 'div',
		            'container_class'   => 'collapse navbar-collapse pull-right',
		            'container_id'      => 'navbarSupportedContent',
		            'depth'             => 0,
		            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ));
            ?>
    </div>
</nav>


