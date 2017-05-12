<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head() ?>
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <?php if (has_nav_menu('header-menu')): ?>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <?php endif; ?>
                    <a href="<?php bloginfo('url') ?>" class="navbar-brand text-uppercase"><?php bloginfo('name') ?></a>
                </div>

                <?php
                if (has_nav_menu('header-menu')):
                    wp_nav_menu([
                        'theme_location' => 'header-menu',
                        'container_id' => 'menu',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'fallback_cb' => false,
                    ]);
                endif;
                ?>
            </div>
        </nav>
    </header>
    <main>
