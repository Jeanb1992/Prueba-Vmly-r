<?php 
add_theme_support('post-thumbnails');
   
function init_template(){
    add_theme_support( 'title-tag');
        register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );

}


function assets(){
    wp_enqueue_style( 'bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', '', '4.5.3', 'all' );
    wp_enqueue_style( 'montserrat' , 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap', '', '1.0', 'all' );
    wp_enqueue_style( 'estilo', get_template_directory_uri() . '/style.css' );

    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js','','1.16.0', true);
    wp_enqueue_script('boostraps', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery','popper'),'4.4.1', true);
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);
}

add_action('wp_enqueue_scripts','assets');


function sidebar(){
    register_sidebar(
        array(
            'name' => 'Pie de página',
            'id'   => 'footer',
            'description' => 'Zona de Widgets para pie de página',
            'before_title' => '<p>',
            'after_title'  => '</p>',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
        )
        );
}

add_action('widgets_init', 'sidebar');

function productos_type(){
    $labels = array(
        'name' => 'Productos',
        'singular_name' => 'Producto',
        'manu_name' => 'Productos',
    );

    $args = array(
        'label'  => 'Productos', 
        'description' => 'Productos de PRUEBA',
        'labels'       => $labels,
        'supports'   => array('title','editor','thumbnail', 'revisions','custom-fields'),
        'public'    => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-grid-view',
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite'       => true,
        'show_in_rest' => true,

    );    
    register_post_type('producto', $args);
}

add_action('init', 'productos_type');

?>