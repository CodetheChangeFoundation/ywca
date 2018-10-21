<?php

function bootstrap_enqueue_styles () {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );

}
function ywca_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('customcss', get_template_directory_uri() . '/assets/css/ywca.css', array(), '1.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/ywca.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'ywca_enqueue_styles' );

function create_paragraph() {
	register_post_type( 'paragraph',
		array(
			'labels'       => array(
				'name'       => __( 'Paragraph' ),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'editor',
			),
		)
	);
}
add_action( 'init', 'create_paragraph' );

function paragraph_meta_box() {
	add_meta_box(
		'paragraph_meta_box', // $id
		'Paragraph Options', // $title
		'show_paragraph_meta_box', // $callback
		'paragraph', // $screen
		'normal', // $context
		'high' // $priority
	);
}

function show_paragraph_meta_box() {
	global $post;
		$meta = get_post_meta( $post->ID, 'paragraph_fields', true ); ?>

	<input type="hidden" name="paragraph_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
<p>
	<label for="paragraph_fields[select]">Location</label>
	<br>
	<select name="paragraph_fields[select]" id="paragraph_fields[select]">
			<option value="top" <?php selected( $meta['select'], 'top' ); ?>>Top of page</option>
			<option value="bottom" <?php selected( $meta['select'], 'bottom' ); ?>>Bottom of page</option>
	</select>
</p>

	<?php }

  add_action( 'add_meta_boxes', 'paragraph_meta_box' );


  function save_paragraph_fields_meta( $post_id ) {
	// verify nonce
	if ( !wp_verify_nonce( $_POST['paragraph_meta_box_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'page' === $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	$old = get_post_meta( $post_id, 'paragraph_fields', true );
	$new = $_POST['paragraph_fields'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'paragraph_fields', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'paragraph_fields', $old );
	}
}
add_action( 'save_post', 'save_paragraph_fields_meta' );




?>
