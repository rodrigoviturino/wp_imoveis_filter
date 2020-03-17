<?php

// REgister Custom Post Type
function rv_register_imovel_post_type(){

        $labels = array(
            'name' => 'imoveis',
            'singular_name' => 'imovel',
            'menu_name' => 'Imoveis',
            'name_admin_bar' => 'Imovel',
            'add_new' => 'Adicionar Imovel',
            'add_new_item' => 'Adicionar Novo Imovel',
            'new_item' => 'Novo Imovel',
            'edit_item' => 'Editar Imovel',
            'view_item' => 'Visualizar Imovel',
            'all_items' => 'Todos os Imoveis',
            'not_found' => 'Nenhum imovel localizado',
            'not_found_in_trash' => 'Nenhuma receita no lixo',
            'set_featured_image' => 'Adicionar imagem do imovel em destaque'
        );

        $label = array (
            'labels' => $labels,
            'description' => 'Imobiliaria para administrar e venda do seu imóvel',
            'public' => true,
            'publicly_queryable' => true,
            'query_var' => true,
            // 'taxonomies' => array('category_name', 'imovel'),
            'taxonomies' => array(),
            'show_ui' => true,
            'show_in_menu' => true,
            'rewrite' => array( 'slug' => 'imovel' ),
            'capability_type' => 'page',
            'menu_icon' => 'dashicons-admin-multisite',
            'menu_position' => 5,
            'supports' => array('title', 'editor','author', 'comments', 'thumbnail','custom-fields')
        );

    register_post_type('imovel', $label);
    flush_rewrite_rules(); 

}

// Taxonomias
function rv_register_imovel_taxonomia(){
    $labels = array(
        'name' => 'Cadeiras',
        'singular_name' => 'Cadeira',
        'all_items' => 'Todas as Cadeiras',
        'parent_item' => 'Parent Cadeira',
        'parent_item_colon' => 'Parent Cadeira:',
        'add_new_item' => 'Add nova Cadeira',
        'menu_name' => 'Cadeiras'
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menu' => true,
        'show_in_rest' => false,
        'show_admin_column' => true
    );
    register_taxonomy('cadeira', array('imovel'), $args);

    $labels = array(
        'name' => 'Categoria Imoveis',
        'singular_name' => 'Categoria Imovel',
        'all_items' => 'Todas os Imoveis',
        'parent_item' => 'Parent Imovel',
        'parent_item_colon' => 'Parent Imovel:',
        'add_new_item' => 'Add novo Imovel',
        'menu_name' => 'Categoria Imoveis'
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menu' => true,
        'show_in_rest' => false,
        'show_admin_column' => true
    );
    register_taxonomy('cad_imoveis', array('imovel'), $args);
}

// Taxonomia
// function rv_register_imovel_taxonomia(){

//     register_taxonomy('categoria_imovel', 'imovel', 
//         array(
//             'labels' => array (
//                 'name' => 'Categoria Imovel',
//                 'singular_name' => 'categoria imovel',
//                 'search_items' => 'Pesquisar por Imovel',
//                 'edit_item' => 'Editar Imovel',
//                 'add_new_item' => 'Adicionar Novo Imovel'
//             ),
//         'hierarchical' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'imovel/tipo', 'with_front' => true)
//         )
//     );
// }

// Css e Javascript
function rv_theme_styles(){
    $template_diretorio = get_template_directory_uri();

    wp_enqueue_style('theme_css', get_stylesheet_directory_uri() . '/style.css' );

    wp_enqueue_script('theme_js', $template_diretorio . '/assets/js/main.js' );
}

function rv_after_theme(){
    add_theme_support('post-thumbnails');
}
