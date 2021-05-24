<?php
	$args_filme = array(
        'post_type' => 'video',
		'category_name' => 'filmes',
	); 
    ?>
        <div id="owl-demo" class="owl-carousel owl-theme">
            <?php $novo_loop = new WP_Query( $args_filme );
                if ( $novo_loop->have_posts() )
                    :$c=0;
                    while ( $novo_loop->have_posts() ) 
                    : $novo_loop->the_post();
                    ?>    
                <div class="item "><?php the_post_thumbnail(); ?>
                    <div class="info-carousel"><?php the_field('duracao');?>m</div>
                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                </div> 
                    <?php endwhile; ?></div> 
                    <?php	else :
                    ?>
                    Sem vídeos disponíveis
                    <?php
                            endif;
                    // Reseta as queries
                        wp_reset_postdata();
                    ?>
        </div>