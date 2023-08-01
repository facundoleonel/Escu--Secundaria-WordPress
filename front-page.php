<?php get_header();?>
    <main class="container-front is-multiline is-mobile is-centered" style="border:1px solid blue;">
        <?php if(have_posts()){
            while(have_posts()){
                the_post();?>
                <?php the_content();?>    
            <?php }
        }?>
    </main>
    <div class="container-front is-centered" style="border:1px solid blue;" >
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
                 ?> <div class="columns horizontal-container is-centered" style="border:1px solid red;"> <?php
                    while($nov->have_posts()):
                        $nov->the_post();
                        ?>  
                            <div class="column is-3 is-centered is-desktop is-mobile">
                                    <?php the_post_thumbnail('medium'); ?>
                                        <a class="decoration" href="<?php the_permalink(); ?>">
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