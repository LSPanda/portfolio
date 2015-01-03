<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name') ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="http://portfolio.simon-leyder.be/wp-content/themes/portfolio/images/favicon.png" />
        <link rel="stylesheet" href="<?php echo(get_stylesheet_uri()) ?>">
        <!-- Import google web font -->
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,800' rel='stylesheet' type='text/css'>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body id="wrapper">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header itemscope itemtype="http://schema.org/WPHeader">
            <div class="headerWidth" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <h1 itemprop="accountablePerson"><a href="http://portfolio.simon-leyder.be/" itemprop="url">Simon Leyder<span itemprop="text"> Un gars du web&nbsp;!</span></a></h1>
                <h2 class="hiddenTitle" itemprop="alternativeHeadline">Menu de Navigation</h2>
                <?php 
                    $myArgsMenu = array(
                        'theme_location'  => 'top',
                        'container'       => 'div',
                        'container_class' => 'nav',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0
                    );

                    wp_nav_menu( $myArgsMenu );
                ?>
            </div>
        </header>