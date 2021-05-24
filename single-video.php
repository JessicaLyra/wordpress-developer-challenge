<?php get_header();?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/single-video.css">

<?php while (have_posts()) {
    the_post();
}?>
<div class="cont">
    <div class="row bloco-info">
        <div class="col-2 ">
            <div class="cont-info-1"><?php the_category();?></div>
        </div>
        <div class="col-2">
            <div class="cont-info-2"><?php the_field('duracao');?>m</div>
        </div>
    </div>
        <h1><?php the_title();?></h1>
</div>
<div class="video-cont  ">
    <div class="video">
        <?php the_field('video');?>
    </div>
</div>
<div class="sinopse container">
    <?php the_field('sinopse');?>
</div>
<?php get_footer();?>