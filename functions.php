<?php 

$template_diretorio = get_template_directory();

// Include
require_once ($template_diretorio . '/include/setup.php' );

// Hooks
add_action('init', 'rv_register_imovel_post_type'); // registar post type
add_action('init', 'rv_register_imovel_taxonomia'); // registar taxonomia
add_action('init', 'rv_theme_styles');

add_action('after_setup_theme', 'rv_after_theme');


// add_action('register_meta', 'rv_imovel_meta_box'); // registar meta box
// add_filter( 'manage_imovel_posts_columns', 'rv_custom_manage_imovel' );
// add_action( 'manage_imovel_posts_custom_column' , 'rv_custom_manage_imovel_data', 10, 2 );


?>
