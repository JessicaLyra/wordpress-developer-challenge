
<?php wp_enqueue_style( 'style', get_stylesheet_uri() ); //chamando stylesheet ?>    

<?php function ed_support_thumbnails() {
    add_theme_support('post-thumbnails'); // thumbnails
}
add_action('after_setup_theme', 'ed_support_thumbnails'); // carrega parametros de suporte do tema
?>
<?php require_once('bs4navwalker.php'); ?>

<?php //logo customizado
    add_theme_support( 'custom-logo' ); 
?>
<?php //registrando menu
    register_nav_menus( array(
        'primary' => __('Menu Primario'),
        'secondary' => __('Menu Secundário')
    ) );
    
?>
<?php add_theme_support( 'custom-background' );//backgorund customizado?>

<?php //Register Custom Post Type VIDEOS
function custom_post_type_video() {

$labels = array(
    'name'                  => _x( 'Videos', 'Videos', 'text_domain' ),
    'singular_name'         => _x( 'Video', 'Video', 'text_domain' ),
    'menu_name'             => __( 'Videos', 'text_domain' ),
    'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
    'archives'              => __( 'Item Arquivos', 'text_domain' ),
    'attributes'            => __( 'Item Attributos', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'Todos os Items', 'text_domain' ),
    'add_new_item'          => __( 'Adicionar Novo Item', 'text_domain' ),
    'add_new'               => __( 'Adicionar Novo', 'text_domain' ),
    'new_item'              => __( 'Novo Item', 'text_domain' ),
    'edit_item'             => __( 'Editar Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'Visualizar Item', 'text_domain' ),
    'view_items'            => __( 'Visualizar Items', 'text_domain' ),
    'search_items'          => __( 'Procurar Item', 'text_domain' ),
    'not_found'             => __( 'Não encontrado', 'text_domain' ),
    'not_found_in_trash'    => __( 'Não encontrado no lixo', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Imagem destacada', 'text_domain' ),
    'remove_featured_image' => __( 'Remover Imagem Destacada', 'text_domain' ),
    'use_featured_image'    => __( 'Usar como imagem', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
);
$args = array(
    'label'                 => __( 'Post Type', 'text_domain' ),
    'description'           => __( 'Descrição do Vídeo', 'text_domain' ),
    'labels'                => $labels,
    'supports'          	=> array( 'title','thumbnail',  'custom-fields' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'menu_icon'				=> 'dashicons-format-video',
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
);
register_post_type( 'video', $args );

}
add_action('init', 'custom_post_type_video',0);
?>

<?php
    function tipo_de_video_init() {
        // cria uma nova taxonomia
        $labels = [
            "name" => __( "Categorias", "custom-post-type-ui" ),
            "singular_name" => __( "Categoria", "custom-post-type-ui" ),
        ];
        
        register_taxonomy(
            'tipo de video',
            'video',
            array(
                'label' => __( 'Tipos de Videos' ),
                'rewrite' => array( 'slug' => 'tipo de video' ),
            )
        );
    }
    add_action( 'init', 'tipo_de_video_init' );
?>
<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6074476628f6a',
	'title' => 'Campos Vídeo',
	'fields' => array(
		array(
			'key' => 'field_607468bed581e',
			'label' => 'Duração',
			'name' => 'duracao',
			'type' => 'number',
			'instructions' => 'Tempo de Duração do Video em minutos',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'min',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_6095dfab608a1',
			'label' => 'sinopse',
			'name' => 'sinopse',
			'type' => 'textarea',
			'instructions' => 'Sinopse do vídeo',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_6095e4f93eb1b',
			'label' => 'video',
			'name' => 'video',
			'type' => 'oembed',
			'instructions' => 'insira o link do video',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'video',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
?>