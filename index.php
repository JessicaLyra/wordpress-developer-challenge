<?php get_header();?>
<!--BANNER MOBILE-->
<?php
             //script para último post adicionado ficar em destaque-->
             $args = array (
                 'post_type'       => 'video',
                 'posts_per_page' => 1   
             );
             $query = new WP_Query ($args);
             while ($query->have_posts()) : $query -> the_post();
          ?>     
<header class="d-md-none d-lg-none" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>)no-repeat center center; background-size: cover height:650px; min-height:100px;min-width:100px;">
         <div class="destaque">
             <div class=" info row container">
                 <div class=" info-1">Filmes</div>
                 <div class="info-2"><?php the_field('duracao');?>m</div>
             </div>
             <h1><?php the_title();?></h1>
             <button class="d-none d-md-block d-lg-block infor-destaque">Mais informações</button>
             <button class="infor-destaque d-md-none d-lg-none">Assistir</button>
             <?php endwhile ?>    
         </div>
     </header>  
<!--BANNER DESKTOP-->
<header class="d-none d-md-block d-lg-block" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>)no-repeat center center; background-size: cover; height:1000px; min-height:100px;min-width:100px;">
         
         <div class="destaque">
          <?php
             //script para último post adicionado ficar em destaque-->
             $args = array (
                 'post_type'       => 'video',
                 'posts_per_page' => 1   
                 
             );
             $query = new WP_Query ($args);
             while ($query->have_posts()) : $query -> the_post();

          ?>           
             <div class=" info row container">
                 <div class=" info-1">Filmes</div>
                 <div class="info-2"><?php the_field('duracao');?>m</div>
             </div>
             <h1><?php the_title();?></h1>
             <button class="d-none d-md-block d-lg-block infor-destaque">Mais informações</button>
             <button class="infor-destaque d-md-none d-lg-none">Assistir</button>
             <?php endwhile ?>    
         </div>
       
 </header> 
<section>
    <h1 class="titulo-categoria">Filmes</h1>
    <?php get_template_part('includes/filmes');?>
</section>

<section>
    <h1 class="titulo-categoria">Documentários</h1>
     <?php get_template_part('includes/documentarios');?>        
</section>

<section>
    <h1 class="titulo-categoria">Séries</h1>
    <?php get_template_part('includes/series');?>         
</section>
<?php get_footer();?>   