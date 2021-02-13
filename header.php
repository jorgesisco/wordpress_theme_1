<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
    wp_head();
    ?>
</head>
<body>
    <header class="header">
    
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button> -->
            <?php
            if (function_exists('the_custom_logo')){
                
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);


            }
            ?>
            <img class='logo' src="<?php echo $logo[0]   ?>">
            <div class="navbar-container">
                 <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container'=> '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="navbar">%3$s</ul>'
                        
                    )
                );
                ?> 
                <div class="burger-container">
                <div class="burger_icon_1"></div>
                <div class="burger_icon_2"></div>
                <div class="burger_icon_3"></div>
            </div>
               <!-- <ul class='navbar'>
               <img class="logo" s rc="/assets/images/logo.png"/>
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Buy a mold</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page.html"><i class="fas fa-file-image fa-fw mr-2"></i>Newsletter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="archive.html"><i class="fas fa-archive fa-fw mr-2"></i>Who are we?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="contact.html"><i class="fas fa-envelope fa-fw mr-2"></i>Media Kit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="contact.html"><i class="fas fa-envelope fa-fw mr-2"></i>Contact Us!</a>
                </li>
                </ul> -->
                </div>
    </header>

    <div class="main-wrapper">
        <!-- <img src='/assets/images/shape.svg'> -->
        <header class='hero-title'>
            <!-- <h1><?php the_title(); ?></h1> -->
            <a class="site-title" href="index.html">SiteName.dev</a>
        </header>
    </div>