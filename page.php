<?php get_header();?>
<!-- //traemos el contenido de nuestra pagina -->
<!-- generamos un lup por defecto -->
<!-- esta funcion hace que si queda contenido para mostrar
devuelva true y si no hay mas contenido que devuelva false -->
<main>
    <?php if(have_posts()){
        while(have_posts()){
            // trae el contenido
            the_post();?>
            <h1><?php the_title();?></h1>
            <?php the_content();?>
        <?php }
    }?>
</main>
<?php get_footer();?>