<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jessica Lyra">
    <title><?php bloginfo('name'); ?></title>
    <!--bootstrap-->
    <link href="<?php bloginfo('template_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/fontface.css">
    <!-- owl caroulsel-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.min">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        <!--HEADER MOBILE-->
            <div class=" d-sm-none d-md-none d-lg-none navbar navbar-expand menu">
                <a class="navbar-brand" href="<?php bloginfo('url');?>">
                    <?php  
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {?>
                       <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png">
                    <?php
                    }
                    ?>
                </a>
            </div>    
            <nav class="d-sm-none d-md-none d-lg-none menu-cel">
                <ul class="row">    
                    <li class="col-4 ">
                        <a href="<?php bloginfo('url');?>/category/filmes"> 
                            <img src="<?php bloginfo('template_url');?>/assets/img/filmes.svg" alt="">
                            <br>Filmes
                        </a>
                    </li>
                    <li class="col-4">
                        <a href="<?php bloginfo('url');?>/category/documentarios"> 
                            <img src="<?php bloginfo('template_url');?>/assets/img/documentarios.svg" alt="">
                            <br>Documentários
                        </a>
                    </li>
                    <li class="col-4">
                        <a href="<?php bloginfo('url');?>/category/series">
                            <img src="<?php bloginfo('template_url');?>/assets/img/series.svg" alt="">
                            <br>Séries
                        </a>
                    </li>
                </ul>    
            </nav>
        <!--FIM DO MENU MOBILE-->
            </nav>
            <nav class="d-none d-sm-block d-md-block d-lg-block navbar navbar-expand-lg menu">
                <div class="container-fluid alinhamento-menu">    
                    <a class="navbar-brand" href="<?php bloginfo('url');?>">
                        <?php  
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png">
                        <?php
                        }
                        ?>
                    </a>
                
                    <?php wp_nav_menu (
                        array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_id' => 'conteudoNavbarSuportado',
                            'container_class' => ' itens ',
                            'menu_id' => 'false',
                            'menu_class' => 'navbar-nav ',
                            'depth' => 0,
                            'fallback_cb' => 'bs4navwalker::fallback',
                            'walker' => new bs4navwalker()           
                        )
                        );
                    ?> 
                </div>
            </nav>
            
