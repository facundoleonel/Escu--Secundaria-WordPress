<?php get_header();?>
    <main>
        <div class="container-full">
            <div class="columns">
                <div class="column img-pri">
                    <?php if(have_posts()){
                        while(have_posts()){
                            the_post();?>
                            <?php the_post_thumbnail('medium_large'); ?>
                            <?php the_content();?>    
                        <?php }
                    }?>
                </div>
            </div>
        </div>
    </main>

    <div class="container-front is-centered" >
                <?php 
                $args = array(
                    'post_type' => 'novedad',
                    'post_per_page' => -1,
                    'order' => 'DESC',
                    'orderby' => 'date',
                );   
                $nov = new WP_Query($args);
                //Creamos el LOOP
                if($nov -> have_posts()):
                 ?> <div class="columns horizontal-container is-centered"> <?php
                    while($nov->have_posts()):
                        $nov->the_post();
                        ?>  
                            <div class="column is-3 is-centered is-desktop is-mobile">
                                    <a class="decoration" href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                        <h1 class="text"><?php the_title(); ?></h1> 
                                        <p><?php the_excerpt(); ?></p>
                                    </a>
                            </div>
                    <?php endwhile;
                 ?></div> <?php   
                endif;
                ?>
            </div>
<?php get_footer();?>