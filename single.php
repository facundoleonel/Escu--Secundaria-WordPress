<?php get_header();?>
<main>
    <?php if(have_posts()):
        ?> <div class="container-columns is-centered is-mobile" > <?php
            while(have_posts()):
                the_post();
            ?>
            <div class="column is-centered">
                <h1><?php the_title()?></h1>
                    <div class="portada-img">
                        <?php the_post_thumbnail('large');?>
                    </div>
                    <div class="portada-content">
                        <?php the_content();?>
                    </div>
            </div>
            <?php endwhile;
            ?></div> <?php
        endif;        
    ?>
</main>
<?php get_footer();?>