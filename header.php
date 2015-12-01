<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>Stremler Gravel Inc. | Lynden, WA</title> 
    <!--Viewport Meta Tag--><meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Fonts--> <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    
    <!--Stylesheets-->

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slice.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/styles.css" />

 
</head>
<body>

<div class="framework_container">

    <section>
            <video autoplay loop id="video-background" muted>
                <source src="<?php bloginfo( 'template_url' ); ?>/videos/timelapse.mp4" type="video/mp4">
            </video>
        </section>  
	
    <div class="col one landing_container">


        <section class="landing">
            <nav class="mobile-menu">
            <label for="show-menu" class="show-menu"><span><img alt="" src="<?php bloginfo( 'template_url' ); ?>/images/gravellogo.png" /></span><div class="lines"><img alt="" src="<?php bloginfo( 'template_url' ); ?>/images/menu.svg" /></div></label>
                <input type="checkbox" id="show-menu">
                    <ul id="menu">
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#pit">Gravel Pit</a></li>
                <li class="logo"><a href=""><img alt="" src="<?php bloginfo( 'template_url' ); ?>/images/gravellogo.png" /></a></li>
                <li><a href="#calculator">Calculator</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            
            <section><?php echo get_post_field('post_content', 16); ?></section>

<section class="topbanner"><a href=""><h5>Check out our concrete division &#x2192;</h5></a></section>
            
        </section> <!--landing-->


    </div>

    <div class="body_container">
