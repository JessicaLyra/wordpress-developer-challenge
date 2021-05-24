<?php get_header();?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/category.css">
  
<?php if(is_category( )) : ?>
    <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <h1 class="titulo-categoria"><?php single_cat_title();?></h1>
                    <p class="descricao"><?php echo category_description();?></p>  
                </div>
                <div class="col-12 col-md-8">
                    <div class="row">
                 <?php  $args = array(
                        'post_type' => 'video',
                        'category_name' =>'series',
	            );?>
                <?php $novo_loop = new WP_Query( $args );
?>
                <?php if($novo_loop ->have_posts()): while ($novo_loop->have_posts()): $novo_loop->the_post();?>
                    <div class="bloco col-6 col-md-4"><?php the_post_thumbnail(); ?>
                        <div class="info-carrossel"><?php the_field('duracao');?>m</div>
                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    </div> 
                   <?php endwhile;endif;?> 
            </div>
                </div>
            </div>
    </div>
    <?php  else: ?>
    é categoria filmes<?php endif; ?>

    

<?php get_footer();?>