<?php
//para llamar las imagenes
function getIMG($filename){
    return get_template_directory_uri()."/asset/img/".$filename;
}

        // Imagen destacada
        if ( function_exists( 'add_theme_support' ) ) {
            add_theme_support('post-thumbnails');
            add_theme_support('title-tag');  
        }
        //MENU PRINCIPAL: donde me registra los enlaces permanentes
        register_nav_menus( array('menu_principal' => 'Menú Principal'));


//Cargamos los  Estilos
function assets() {
    wp_enqueue_style('bulma', get_template_directory_uri() . '/asset/css/bulma.css');
    wp_enqueue_style('style-app', get_template_directory_uri() . '/asset/css/main.css', array(), '1.0.0', 'all');

    wp_enqueue_script('app', get_template_directory_uri() . '/asset/js/app.js', array(), '3.4.0', true);
}
add_action('wp_enqueue_scripts', 'assets');


//cargamos nuestros sidebar en nuestro templey
//pie de pagina
function sidebar(){
    register_sidebar(
        array(
            'name' => 'pie de página',
            'id' => 'footer',
            'description' => 'Zona de Widgets para pie de página',
            'before_title' => '<P>',
            'after_title' => '</p>',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
        )
    );
}

add_action('widgets_init','sidebar');
//cargamos nuestros sidebar en nuestro templey
//HEADER
function side(){
    register_sidebar(
        array(
            'name' => 'encabezado',
            'id' => 'header',
            'description' => 'Zona de Widgets para el encabezado',
            'before_title' => '<P>',
            'after_title' => '</p>',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
        )
        );
}

add_action('widgets_init','side');
//Custom Post Type
function Novedades_type(){
    $labels = array(
        'name' => 'Novedades',
        'singular_name' => 'Novedad',
        'manu_name' => 'Novedades',
    ); 

    $args = array(
        //Lebel: hace referencia a la etiqueta
        'label' => 'Novedades',
        'description' => 'Novedades Escuela',
        //Lebels: hace referencia a las etiquetas
        'labels' => $labels,
        'supports' => array('title','editor','thumbnail','revisions'),
        'public' => true,
        //En la pagina de opciones en menu podamos agregar las URL del post_type personalizado
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-book',
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite'       => true,
        'show_in_rest' => true
    );

    register_post_type('novedad', $args);
}
add_action('init', 'Novedades_type');


//Links de las Redes Sociales
function get_facebook_url() {
    return "https://www.facebook.com/profile.php?id=100012251711230&mibextid=ZbWKwL";
}

function get_instagram_url() {
    return "https://instagram.com/escuelasaltogrande?igshid=MzRlODBiNWFlZA==";
}