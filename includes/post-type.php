<?php 

//------------------Register Custom Post Примеры робот----------------------
	function new_post_type() {
			$labels = array(
					'name'                  => _x( 'Примеры', 'Post Type General Name', 'text_domain' ),
					'singular_name'         => _x( 'Примеры', 'Post Type Singular Name', 'text_domain' ),
					'menu_name'             => __( 'Примеры', 'text_domain' ),
					'all_items'             => __( 'Примеры', 'text_domain' ),
					'add_new_item'          => __( 'Добавить пример', 'text_domain' ),
					'add_new'               => __( 'Добавить пример', 'text_domain' ),
			);
			$args = array(
					'label'                 => __( 'Примеры', 'text_domain' ),
					'labels'                => $labels,
					'supports'              => array( 'title', 'editor', 'thumbnail','excerpt' ),// 'title','editor','author','thumbnail',,'trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
					'hierarchical'          => false,
					'public'                => true,
					'show_ui'               => true,
					'show_in_menu'          => true,
					'menu_position'         => 4,
					'menu_icon'             => 'dashicons-images-alt2',
					'show_in_admin_bar'     => true,
					'show_in_nav_menus'     => true,
					'can_export'            => true,
					'has_archive'           => true,
					'exclude_from_search'   => false,
					'publicly_queryable'    => true,
					'capability_type'       => 'page',
					'show_in_rest' => true, // Important !
					// 'taxonomies'          => array( 'category' ),
			);
			register_post_type( 'new', $args );
			
	}
	add_action( 'init', 'new_post_type', 0 );

	//------------------Register Custom Post Услуги----------------------
	function services_post_type() {
		$labels = array(
				'name'                  => _x( 'Услуги', 'Post Type General Name', 'text_domain' ),
				'singular_name'         => _x( 'Услуги', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'             => __( 'Услуги', 'text_domain' ),
				'all_items'             => __( 'Услуги', 'text_domain' ),
				'add_new_item'          => __( 'Добавить услугу', 'text_domain' ),
				'add_new'               => __( 'Добавить услугу', 'text_domain' ),
		);
		$args = array(
				'label'                 => __( 'Услуги', 'text_domain' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'editor', 'thumbnail','excerpt' ),// 'title','editor','author','thumbnail',,'trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 4,
				'menu_icon'             => 'dashicons-images-alt2',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
				'show_in_rest' => true, // Important !
				// 'taxonomies'          => array( 'category' ),
		);
		register_post_type( 'services', $args );
		
}
add_action( 'init', 'services_post_type', 0 );

	