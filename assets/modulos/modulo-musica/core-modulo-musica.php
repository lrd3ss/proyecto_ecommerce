<?php  /*  audios */

function audios_register() {

    $labels = array(
        'name' => _x('audios', 'post type general name'),
        'singular_name' => _x('audio', 'post type singular name'),
        'add_new' => _x('Agregar audio', 'slideshow_two item'),
        'add_new_item' => __('Agregar audio'),
        'edit_item' => __('Editar audio'),
        'new_item' => __('Nueva audio'),
        'view_item' => __('Ver el audio'),
        'search_items' => __('Buscar audio'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-format-audio',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'audio', 'with_front' => false)
      ); 

    register_post_type( 'audios' , $args );
}

add_action('init', 'audios_register');


 /*categorias personalizadas para videos*/
 function tipo_audios() {

	register_taxonomy(
		'tipo-audios',
		'audios',
		array(
			'label' => __( 'Tipo de audios' ),
			'rewrite' => array( 'slug' => 'tipo-audios' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'tipo_audios' );

    
 /*categorias personalizadas*/
 function categoria_audios() {

	register_taxonomy(
		'categoria-audios',
		'audios',
		array(
			'label' => __( 'Categoria audios' ),
			'rewrite' => array( 'slug' => 'categoria-audios' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_audios' );




