<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

<?php wp_footer(); ?>
<footer>
<div class="logo-rodape"> <?php if( has_custom_logo() ) {
                        the_custom_logo();
                    } else {?>
                       <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png">
                    <?php
                    }
                    ?></div>
<div class="ano">&copy; <?php the_time('Y');?>- Play - Todos os direitos reservados.</div>
</footer>
    <!--JS, Popper.js, e jQuery-->
    <!-- JavaScript Bundle with Popper -->
<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 2000,
    margin:19,
    autoWidth: true,
    nav:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

    </script>
</body>
</html>