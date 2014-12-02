<?php

	add_action( 'init', 'create_post_type' );
	add_action( 'init', 'create_nav_menu' );
	add_action( 'init', 'type' );
	add_action( 'init', 'outils' );
	add_theme_support( 'post-thumbnails' ); 

	function create_post_type(){
		$args = array(
			'label' => 'Créations',
			'description' => 'Affichage des différents travaux produit par l\'administrateur du portfolio',
			'public' => true,
			'show_ui' => true,
			'menu_position' => 5,
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' )
		);
		$args2 = array(
			'label' => 'Livres',
			'description' => 'Listing des derniers livres que j\'ai lu.',
			'public' => true,
			'show_ui' => true,
			'menu_position' => 5,
			'supports' => array( 'title', 'editor', 'thumbnail', 'comments' )
		);
		register_post_type( "creations", $args );
		register_post_type( "livre", $args2 );
	}

	function create_nav_menu(){
		register_nav_menu( 'top', 'Menu principal' );
	};

	function type() {
		register_taxonomy(
			'type',
			'creations',
			array(
				'label' => __( 'Type de travail' ),
				'rewrite' => array( 'slug' => 'type-de-travail' )
			)
		);
	};

	function outils() {
		register_taxonomy(
			'outils',
			'creations',
			array(
				'label' => __( 'Outils Utilisés' ),
				'rewrite' => array( 'slug' => 'outils-utilises' )
			)
		);
	};